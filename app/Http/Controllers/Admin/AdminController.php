<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Helpers\SeoHelpers;
use \App\Helpers\MailHelpers;
use Auth;
use DB;
use DateTime;
use Hash;
use Input;
use Mail;
use Redirect;
use Response;
use Validator;
use View;
//use Crypt;

class AdminController extends Controller {

    public function __construct()
    {
        if(Auth::user()->role_id != 1)
        {
            Redirect::to('my')->send();
        }
        $this->middleware('auth');
    }

    public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
            'role_id' => Auth::user()->role_id,
            'menuItem' => 'admin',
            'pageTitle' => '',
        ];
    }

	public function getMailValues()
    {
        $mailHelpers = new MailHelpers();
        return $mailHelpers->ContactForm();
    }

    public function index()
    {
        /*$users = DB::table('users')
		->orderBy('id', 'DESC')
		->get();*/ // I dont believe we need this anymore but keep it		
		
        $adminModel = $this->GetUserInfo();
		
		$lastname = Input::get('lastname');	
		$emailaddress = Input::get('emailaddress');
		$repid = Input::get('repid');
		$teamtype = Input::get('teamtype');

		$searchusers = $this->SearchUsers($lastname,$emailaddress,$repid,$teamtype);
		
        return View::make('admin.index', compact('adminModel', 'users', 'searchusers'));
    }

    public function GetUsers()
    {
        $orderby = explode(" ", Input::get('jtSorting'));
        $order = count($orderby) > 1 ? $orderby[0] : 'name';
        $orderDir = count($orderby) > 1 ? $orderby[1] : 'asc';

        $data = DB::table('users')
            ->join('role', 'role.id', '=', 'users.role_id')
            ->select('users.id', 'users.name', 'users.email', 'role.name as roleName', 'users.repid', 'users.active', 'users.created_at', 'users.countdownlist', 'users.wealthlist')
			->orderBy('users.created_at', 'DESC');

        return Response::json(array(
            'Result' => 'OK',
            'TotalRecordCount' => $data->count(),
            'Records' => $data->orderBy($order, $orderDir)
                ->take(Input::get('jtPageSize'))
                ->skip(Input::get('jtStartIndex'))
                ->get()
        ));
    }
	
	public function SearchUsers($lname, $email, $repid, $teamtype)
	{
		
		$searchusers = DB::table('users')
		->where('name', 'LIKE', '%'.$lname.'%')
		->where('email', 'LIKE', '%'.$email.'%')
		->where('repid', 'LIKE', '%'.$repid.'%')
		->where('team', 'LIKE', '%'.$teamtype.'%')
		->orderBy('id', 'DESC')
		->get();
		
		return  $searchusers;
	}

    public function Register()
    {
        $adminModel = $this->GetUserInfo();
        
		$recruiters = DB::table('recruiters')
		->where('active', '=', '1')
		->get();
		
		return View::make('admin.register', compact('adminModel', 'users', 'recruiters'));	
    }
	
	public function TraineeOverview()
	{
		
		$todaydate = date('Y-m-d');
			
		$trainees = DB::table('users')
		->leftJoin('quiz_log', 'users.id', '=', 'quiz_log.user_id')
		->where('users.role_id', '=', '5')
		//->where('users.trainingexpired', '<', $todaydate)
		->groupBy('users.id')
		->orderBy('quiz_log.completed_datetime', 'DESC')
		->select(DB::raw('users.id, users.username, users.name, users.certification_completed, created_at, max(quiz_log.quiz_id) as idofquiz, quiz_log.completed_datetime'))
		->get();
		 
		
		$adminModel = $this->GetUserInfo();
		return View::make('admin.traineeoverview', compact('adminModel', 'trainees'));	

	}
	
	public function Graduates()
	{
		$grads = DB::table('users')
		->where('certification_completed', '!=', '0000-00-00')
		->where('role_id', '=', '5')
		->orderBy('certification_completed', 'DESC')
		->select(DB::raw('id, name, certification_completed'))
		->get();
		 
		
		$adminModel = $this->GetUserInfo();
		return View::make('admin.graduates', compact('adminModel', 'grads'));
	}

    public function UserDetail($userId)
    {
        $users = DB::table('users')->where('id', $userId)->take(1)->get();
		$quizlogs = DB::table('quiz_log')
		->leftJoin('quiz', 'quiz.id', '=', 'quiz_log.quiz_id')
		->where('user_id', '=', $userId)
		->select(DB::raw('quiz_log.id, quiz_log.quiz_id, quiz_log.user_id, quiz_log.start_datetime, quiz_log.completed_datetime, quiz.name'))
		->get();
		$sentemails = DB::table('emailsent')->where('user_id', '=', $userId)->get();
		$recruiters = DB::table('recruiters')->where('active', '=', '1')->get();
		
        $adminModel = $this->GetUserInfo();
        return View::make('admin.userDetail', compact('adminModel', 'users', 'quizlogs', 'sentemails', 'recruiters'));
    }

    public function UserDetailInsert()
    {
        $data = Input::only('name', 'userName', 'email', 'password', 'confPassword');

        $rules = array (
            'name' => 'required',
            'userName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confPassword' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if(Input::get('password') != Input::get('confPassword'))
        {
            $errors->add('pwd1', 'Your Passwords do not match.');
        }

        if ($validator -> passes())
        {
			$timezone = date_default_timezone_get();
			date_default_timezone_set($timezone);
			$daterange = time() + 1209600;
			$askingdate = date('Y-m-d', $daterange);
			
            $now = new DateTime();

            $repid = Input::get('repid') == '' ? 0 : Input::get('repid');
			$activestatus = Input::get('activestatus') == '' ? 0 : 1;
				//$encrypted_password = Crypt::encrypt(Input::get('password'));
                DB::table('users')->where('id', Input::get('id'))
                    ->insert([
                        'name' => Input::get('name'),
                        'username' => Input::get('userName'),
                        'email' => Input::get('email'),
                        'password' => Hash::make(Input::get('password')),
                        //'passwor' => $encrypted_password,
						'repid' => $repid,
                        'role_id' => Input::get('roleId'),
                        'active' => $activestatus,
                        'created_at' => $now->format('Y-m-d H:i:s'),
                        'updated_at' => $now->format('Y-m-d H:i:s'),
						'recruiter' => Input::get('assignedrecruit'),
						'trainingexpired' => $askingdate,
						'team' => ''
						]);

            //Redirect to page
            return Redirect::route('admin');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function UserDetailUpdate()
    {
        $data = Input::only('name', 'userName', 'email');

        $rules = array (
            'name' => 'required',
            'userName' => 'required',
            'email' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if(Input::get('password') != '' && (Input::get('password') != Input::get('confPassword')))
        {
            $errors->add('pwd1', 'Your Passwords do not match.');
        }

        if ($validator -> passes())
        {
			
            $now = new DateTime();
			$activestatus = Input::get('activestatus') == '' ? 0 : 1;
            $repid = Input::get('repid') == '' ? 0 : Input::get('repid');
            if(Input::get('password') != '')
            {
                DB::table('users')->where('id', Input::get('id'))
                    ->update([
                        'name' => Input::get('name'),
                        'username' => Input::get('userName'),
                        'email' => Input::get('email'),
						'ssn' => Input::get('ssn'),
                        'password' => Hash::make(Input::get('password')),
                        'role_id' => Input::get('roleId'),
                        'repid' => $repid,
						'address' => Input::get('address'),
						'city' => Input::get('city'),
						'state' => Input::get('state'),
						'zipcode' => Input::get('zipcode'),
						'territoryzip' => Input::get('territoryzip'),
						'mobilephone' => Input::get('mobilephone'),
						'mobilecarrier' => Input::get('mobilecarrier'),
						'phone2' => Input::get('phone2'),
                        'active' => $activestatus,
                        'updated_at' => $now->format('Y-m-d H:i:s'),
						'recruiter' => Input::get('assignedrecruit'),
						'team' => Input::get('teamtype')
						]);
            } else {
                DB::table('users')->where('id', Input::get('id'))
                    ->update([
                        'name' => Input::get('name'),
                        'username' => Input::get('userName'),
                        'email' => Input::get('email'),
						'ssn' => Input::get('ssn'),
                        'role_id' => Input::get('roleId'),
                        'repid' => $repid,
						'address' => Input::get('address'),
						'city' => Input::get('city'),
						'state' => Input::get('state'),
						'zipcode' => Input::get('zipcode'),
						'territoryzip' => Input::get('territoryzip'),
						'mobilephone' => Input::get('mobilephone'),
						'mobilecarrier' => Input::get('mobilecarrier'),
						'phone2' => Input::get('phone2'),
                        'active' => $activestatus,
                        'updated_at' => $now->format('Y-m-d H:i:s'),
						'recruiter' => Input::get('assignedrecruit'),
						'team' => Input::get('teamtype')
						]);
            }
            //Redirect to page
            //return Redirect::route('admin');
			//return $this->UserDetail(8259);
			return Redirect::back()->with('message', 'You successfully updated this user!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function SendAnEmail()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('userid', 'name', 'userName', 'email', 'emailtosend', 'assignedrecruit', 'uspsnum');
			
			$recruiters = DB::table('recruiters')
			->leftJoin('users', 'users.recruiter', '=', 'recruiters.name')
			->where('users.id', '=', Input::get('userid'))
			->select(DB::raw('recruiters.id, recruiters.name, recruiters.phone, recruiters.extension'))
			->get();
			foreach ($recruiters as $recruiter)
			{
				$recruit_name = $recruiter->name;
				$recruit_phone = $recruiter->phone;
				$recruit_extension = $recruiter->extension;
			}
			
			$users = DB::table('users')
			->where('id', '=', Input::get('userid'))
			->get();
			foreach ($users as $user)
			{
				$user_id = $user->id;
				$user_username = $user->username;
				$user_name = $user->name;
				$user_email = $user->email;
				$user_repid = $user->repid;
				//$user_password = $user->password;
			}
			
			$timezone = date_default_timezone_get();
			date_default_timezone_set($timezone);
			$datesent = time();
			$setadate = date('Y-m-d', $datesent);
			
			if(Input::get('emailtosend') == 'Letter of Confirmation'){
				$emailchoice = 'letterofconfirmation';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'dateletterofconfirmation';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'AmeriBanc University Invite'){
				$emailchoice = 'ameribancuniversity';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'dateameribancuniversity';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'Webinar Invitation'){
				$emailchoice = 'webinarinvitation';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'datewebinarinvitation';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'USPS Tracking'){
				$emailchoice = 'uspstracking';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'dateuspstracking';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'Blue Team Assignment'){
				$emailchoice = 'blueteamassign';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'dateblueteamassign';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'Purple Team Assignment'){
				$emailchoice = 'purpleteamassign';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'datepurpleteamassign';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'Green Team Assignment'){
				$emailchoice = 'greenteamassign';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'dategreenteamassign';
				$datesentat = $setadate;	
			}
			if(Input::get('emailtosend') == 'TS AmeriBanc University Invite'){
				$emailchoice = 'tsameribancuniversityinvite';
				$emailoption = Input::get('emailtosend');
				
				$datecolumn = 'datetsameribancuniversityinvite';
				$datesentat = $setadate;	
			}
			
			$userid_email = '';
			$idsinemails = DB::table('emailsent')->where('user_id', '=', Input::get('userid'))->get();
			foreach ($idsinemails as $idsinemail){
				$userid_email = $idsinemail->user_id;
			}
			
			if($userid_email == Input::get('userid')){
					DB::table('emailsent')->where('user_id', '=', Input::get('userid'))
						->update([
									$emailchoice => $emailoption,
									$datecolumn => $datesentat
						]);
			}else{
					DB::table('emailsent')
						->insert([
									'user_id' => Input::get('userid'),
									$emailchoice => $emailoption,
									$datecolumn => $datesentat
						]);	
			}

			if(Input::get('emailtosend') == 'Letter of Confirmation'){
				$thankYouInfo = array('msg' => 'ABN Letter Of Confirmation',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension
			);
				//Email to User
				Mail::send('emails.letterconfirmation', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'ABN LETTER OF CONFIRMATION';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					$message->attach('documents/Confirmation Letter for webinar.pdf');
				});
			}
			
			
			if(Input::get('emailtosend') == 'AmeriBanc University Invite'){
				$thankYouInfo = array('msg' => 'Welcome to AmeriBanc University!',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension
					/*,
					'user_password' => Crypt::decrypt($user_password)*/	
				);
	
				//Email to User
				Mail::send('emails.welcomeameribancuniversity', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Welcome to AmeriBanc University!';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					$message->attach('documents/Overcoming Obstacles.pdf');
					$message->attach('documents/Merchant Consultant Agreement Rev1 02 17 1.pdf');
				});
			}
		
		
			if(Input::get('emailtosend') == 'TS AmeriBanc University Invite'){
				$thankYouInfo = array('msg' => 'Welcome to AmeriBanc University!',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension
					/*,
					'user_password' => Crypt::decrypt($user_password)*/	
				);
	
				//Email to User
				Mail::send('emails.tswelcomeameribancuniversity', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Welcome to AmeriBanc University!';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					$message->attach('documents/Overcoming Obstacles.pdf');
					/*$message->attach('documents/Merchant Consultant Agreement Rev1 02 17 1.pdf');*/
				});
			}
			
			
			if(Input::get('emailtosend') == 'Webinar Invitation'){
				$thankYouInfo = array('msg' => 'Webinar Invitation',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension		
				);
	
				//Email to User
				Mail::send('emails.webinarinvitation', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Webinar Invitation';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					

					$message->attach('documents/Logging in for Training.pdf');
					$message->attach('documents/AmeriBanc National Consultant Check List.pdf');
					//$message->attach('documents/Tuesday_Trainng_5_12_16.pdf');
					
				});
			}
			
			
			if(Input::get('emailtosend') == 'USPS Tracking'){
				$thankYouInfo = array('msg' => 'Your USPS Shipment / Biz Card',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension,
					'uspsnum' => Input::get('uspsnum')	
				);
	
				//Email to User
				Mail::send('emails.uspsshipmentsbizcard', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Your USPS Shipment / Biz Card';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					
					$message->attach('documents/NEW ABN Bus Card Template 12-06-2013.docm');
				});
			}
			
			
			if(Input::get('emailtosend') == 'Blue Team Assignment'){
				$thankYouInfo = array('msg' => 'Team Assignment and Business Card Blue',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'userid' => $user_repid,
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension		
				);
	
				//Email to User
				Mail::send('emails.teamassignbusblue', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Team Assignment and Business Card Blue';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					
					$message->attach('documents/NEW_ABN_Bus_Card_Template_12-06-2013.docm');
					$message->attach('documents/Groovv Offers Examples.pdf');
				});
			}
			
			
			if(Input::get('emailtosend') == 'Purple Team Assignment'){
				$thankYouInfo = array('msg' => 'Team Assignment and Business Card Purple',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'userid' => $user_repid,
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension		
				);
	
				//Email to User
				Mail::send('emails.teamassignbuspurple', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Team Assignment and Business Card Purple';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					
					$message->attach('documents/NEW_ABN_Bus_Card_Template_12-06-2013.docm');
					$message->attach('documents/Groovv Offers Examples.pdf');
				});
			}
			
			
			if(Input::get('emailtosend') == 'Green Team Assignment'){
				$thankYouInfo = array('msg' => 'Team Assignment and Business Card Green',
					'name' => Input::get('name'),
					'username' => Input::get('userName'),
					'userid' => $user_repid,
					'toEmail' => Input::get('email'),
					'recruiter' => $recruit_name,
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension		
				);
	
				//Email to User
				Mail::send('emails.teamassignbusgreen', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'Team Assignment and Business Card Green';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
					
					$message->attach('documents/NEW_ABN_Bus_Card_Template_12-06-2013.docm');
					$message->attach('documents/Groovv Offers Examples.pdf');
				});
			}
			
			


            //Redirect to page
            /*return Redirect::route('careerThankYou')
                ->with('message', 'Your resume has been submitted. Thank You!');*/
			 ?>
             	<script type="text/javascript">
				  alert('You successfully requested this candidate.');
				</script>
             <?php
			return $this->Index();

    }
	
	public function GetTopPublicPost()
	{
		
		$getposts = DB::table('industry_news')
		->orderBy('id', 'DESC')
		->take(10)
		->get();
		
		return  $getposts;
	}

	
}
