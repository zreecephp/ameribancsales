<?php namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use \App\Helpers\SeoHelpers;
use \App\Helpers\MailHelpers;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use DateTime;
use Hash;
use Mail;
use Redirect;
use Validator;
use View;

class MyController extends Controller {


	public function __construct()
	{
        if(Auth::user()->role_id > 5)
        {
			if(Auth::user()->role_id == 8){
				Redirect::to('/')->send();
			}else{
				Redirect::to('career/recruiter')->send();
				//Redirect::to('/my')->send();
			}
        }
        $this->middleware('auth');

	}

    public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
            'role_id' => Auth::user()->role_id,
			'rep_id' => Auth::user()->repid,
            'menuItem' => 'dashboard',
            'pageTitle' => '',
        ];
    }
	
	public function SearchUsers()
	{
		
		$searchusers = DB::table('users')
		->select(DB::raw('concat (name," ",id) as full_name,id'))
		->where('active', '=', '1')
		->orderBy('name', 'ASC')
		->lists('full_name', 'id');
		
		return  $searchusers;
	}
	
	
    public function getMailValues()
    {
        $mailHelpers = new MailHelpers();
        return $mailHelpers->ContactForm();
    }

	public function index()
	{
		$completedQuizNum = DB::table('quiz_log')
            ->where('user_id', Auth::user()->id)
			->where('completed_datetime', '!=', '')
            ->max('quiz_id');

        $adminModel = $this->GetUserInfo();
        return View::make('my.index', compact('adminModel', 'completedQuizNum'));

        /*$completedModule = DB::table('quiz_log')
            ->leftJoin('quiz', 'quiz_log.quiz_id', '=', 'quiz.id')
            ->where('quiz_log.user_id', Auth::user()->id)
            ->max('quiz.module_no');

        $adminModel = $this->GetUserInfo();
        return View::make('my.index', compact('adminModel', 'completedModule'));*/
	}
	
	
    public function Masters()
    {
        $adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'training');
        return View::make('my.masters', array('adminModel' => $adminModel));
    }

    public function MastersVideo($name)
    {
        $adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'training');
        $videoUrl = '';

        switch($name)
        {
            case 'paymentJack':
                $videoUrl = 'http://www.youtube.com/embed/0POmRGAYS_o?rel=0';
                array_set($adminModel, 'pageTitle', 'Payment Jack with an iPhone');
                break;
            case 'paymentBlackJack':
                $videoUrl = 'http://www.youtube.com/embed/nJJZ5SdlHCk?rel=0';
                array_set($adminModel, 'pageTitle', 'Payment Jack with an Blackberry');
                break;
            case 'paymentJackApp':
                $videoUrl = 'http://www.youtube.com/embed/4aw2sG3spEs?rel=0';
                array_set($adminModel, 'pageTitle', 'Download the Payment Jack App');
                break;
            case 'presentation1':
                $videoUrl = 'https://www.youtube.com/embed/bXuF2b6UL5E?rel=0';
                array_set($adminModel, 'pageTitle', 'Full Presentation Part 1');
                break;
            case 'presentation2':
                $videoUrl = 'https://www.youtube.com/embed/AKXWy6m2LTE?rel=0';
                array_set($adminModel, 'pageTitle', 'Full Presentation Part 2');
                break;
            case 'presentation3':
                $videoUrl = 'http://www.youtube.com/embed/ZBxwQalBWXA?rel=0';
                array_set($adminModel, 'pageTitle', 'Full Presentation Part 3');
                break;
            case 'terminalInstall':
                $videoUrl = 'http://www.youtube.com//embed/BaOzmXRdbrk?rel=0';
                array_set($adminModel, 'pageTitle', 'Terminal Install Tutorial');
                break;
        }


        return View::make('my.mastersVideo', compact('adminModel', 'videoUrl'));
    }

    public function DocsAndForms()
    {
        $adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.docsAndForms', array('adminModel' => $adminModel));
    }
	
	public function DocsAndFormsTraining()
    {
        $adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.docsAndFormsTraining', array('adminModel' => $adminModel));
    }
	
	public function RequirementsL1()
	{
		$adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.training.formsPages.requirementsL1', array('adminModel' => $adminModel));	
	}
	public function RequirementsL2()
	{
		$adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.training.formsPages.requirementsL2', array('adminModel' => $adminModel));	
	}
	public function RequirementsL3()
	{
		$adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.training.formsPages.requirementsL3', array('adminModel' => $adminModel));	
	}
	public function Restricted()
	{
		$adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.training.formsPages.restricted', array('adminModel' => $adminModel));	
	}
	public function Prohibited()
	{
		$adminModel = $this->GetUserInfo();
        array_set($adminModel, 'menuItem', 'docs');
        return View::make('my.training.formsPages.prohibited', array('adminModel' => $adminModel));	
	}
	

    public function BsCard()
    {
        $adminModel = $this->GetUserInfo();
		$searchUsers = $this->SearchUsers();
        array_set($adminModel, 'menuItem', 'tools');
        return View::make('my.bsCard', array('adminModel' => $adminModel), compact('searchUsers'));
    }

    public function BusinessCardSubmit()
    {
		//Get the data needed to validate and store it inside Store Variable
        $data = Input::only('dbaname', 'repid', 'phone', 'email', 'zip');
		
        //Validation rules
        $rules = array(
			'dbaname' => 'required',
			'repid' => 'required',
            'phone' => 'required|regex:/^[0-9\-\+]{10,10}$/',//min:10|between:1,10
			'email' => 'email',
			'zip' => 'regex:/^[0-9\-\+]{5,5}$/'
        );

        //Validate data
        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($validator->passes() && $errors->count() < 1)
        {

		
			if (Input::get('spoketoowner') == true) {
				// checked
				$sto = '1';
			} else {
				// unchecked
				$sto = '0';
			}
			
			$todaydate = date("Y-m-d");
			
			$goodnotes = preg_replace('/[^\s\A-Za-z0-9\-]/', '', Input::get('notes'));
			
			DB::table('businesscards')->where('id', Input::get('id'))
				->insert([
					'dbname' => Input::get('dbaname'),
					'bustype' => Input::get('businessType'),
					'address' => Input::get('address'),
					'city' =>  Input::get('city'),
					'state' => Input::get('state'),
					'zip' => Input::get('zip'),
					'firstname' => Input::get('firstname'),
					'lastname' => Input::get('lastname'),
					'title' => Input::get('title'),
					'email' => Input::get('email'),
					'phone' => Input::get('phone'),
					'repid' => Input::get('repid'),
					'date_visited' => Input::get('dateVisited'),
					'notes' => $goodnotes,
					'spoketoowner' => $sto,
					'dateentered' => $todaydate  ]);
	
				//Redirect to page
				$adminModel = $this->GetUserInfo();
				?>
				<script type="text/javascript">
				  alert('You successfully submitted the Business Card.');
				</script>
                <?php
				//return View::make('my.bsCard', array('adminModel' => $adminModel))->with('message', 'Your business card order has been submitted. Thank You!');	
				return Redirect::route('bscardsubmit')
					->with('message', 'Your Business Card Was Successfully Submitted!');
				
		
		}else {

            //return with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function Register()
    {
        $adminModel = $this->GetUserInfo();
		
		$recruiters = DB::table('recruiters')
		->where('active', '=', '1')
		->get();

		
        array_set($adminModel, 'menuItem', 'admin');
        return View::make('my.register', array('adminModel' => $adminModel),  compact('recruiters'));
    }

    public function RegisterSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('name', 'username', 'email', 'assignedrecruit', 'interviewdate', 'interviewtime');

        //Validation rules
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
			'assignedrecruit' => 'required',
			'interviewdate' => 'required',
			'interviewtime' => 'required',
        );

        //Validate data
        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();
        $resumeFile = array('name' => Input::get('name'),
            'email' => Input::get('email'));

        $userCheck = DB::table('users')->where('email', Input::get('email'))->count();

        if ($userCheck > 0) {
            $errors->add('email', 'A duplicate email has been found.');
        }

        if ($validator->passes() && $errors->count() < 1) {
			
			$timezone = date_default_timezone_get();
			date_default_timezone_set($timezone);
			$daterange = time(Input::get('interviewdate')) + 1209600;
			$askingdate = date('Y-m-d', $daterange);
			
            $tempPassword = str_random(10);

            $now = new DateTime();
			
            DB::table('users')
                ->insert([
                    'name' => Input::get('name'),
                    'username' => Input::get('username'),
                    'email' => Input::get('email'),
                    'password' => Hash::make($tempPassword),
					'repid' => 0,
                    'role_id' => 6,
                    'active' => 1,
                    'created_at' => $now->format('Y-m-d H:i:s'),
                    'updated_at' => $now->format('Y-m-d H:i:s'),
					'recruiter' => Input::get('assignedrecruit'),
					'trainingexpired' => $askingdate,
					'team' => ''
					]);
			
			$getnewids = DB::table('users')->where('email', '=', Input::get('email'))->get();
			foreach ($getnewids as $getnewid){
				$newid = $getnewid->id;	
			}
			DB::table('emailsent')
                    ->insert([
								'user_id' => $newid,
								'inviteinterview2' => 'Invite Interview 2'
					]);
			
			$recruiters = DB::table('recruiters')->where('name', '=', Input::get('assignedrecruit'))->get();

			foreach ($recruiters as $recruiter)
			{
				$recruit_phone = $recruiter->phone;
				$recruit_extension = $recruiter->extension;
				$recruit_active = $recruiter->active;
			}
						
			
				$thankYouInfo = array('msg' => 'Your information has been received.',
					'name' => Input::get('name'),
					'username' => Input::get('username'),
					'password' => $tempPassword,
					'toEmail' => Input::get('email'),
					'recruiter' => Input::get('assignedrecruit'),
					'recruiter_phone' => $recruit_phone,
					'recruiter_extension' => $recruit_extension,
					'recruiter_active' => $recruit_active,
					'interviewdate' => Input::get('interviewdate'),
					'interviewtime' => Input::get('interviewtime'),
					);
	
				//Email to User
				Mail::send('emails.inviteinterview2', $thankYouInfo, function ($message) use ($thankYouInfo) {
					$mailValues = $this->getMailValues();
					$contactEmail = $mailValues['careerEmail'];
	
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'ABN Invite For 2nd Interview';
					//$subject = 'Welcome New ABN';
	
					$message->from($fromEmail);
					$message->to(array_get($thankYouInfo, 'toEmail'));
					$message->bcc('recruiting@ameribancsales.com', 'Web Resume');
					//$message->bcc('zreece@ameribancmail.com', 'Web Resume');
					$message->subject($subject);
	
					//$message->attach('documents/ABN_Page_CC_Auth.pdf');
				});



            //Redirect to page
            /*return Redirect::route('careerThankYou')
                ->with('message', 'Your resume has been submitted. Thank You!');*/
			 ?>
             	<script type="text/javascript">
				  alert('You successfully requested this candidate.');
				</script>
             <?php
			 return $this->Register();

        } else {

            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
}

