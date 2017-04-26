<?php namespace App\Http\Controllers\Career;

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
use Swift_Attachment;
use Cookie;
use View;

class CareerController extends Controller {

	public function __construct()
	{
	
	}
	
	/*public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
            'role_id' => Auth::user()->role_id,
            'menuItem' => 'admin',
            'pageTitle' => '',
        ];
    }*/
	
	
	
	public function NextStep()
	{	
	    $seoValues = $this->getSeoValues()['careerNext'];
        return view('career.next-step')->with('seoValues');
	}
	
	public function StepCountdown()
    {
		$id = Auth::user()->id;
		DB::table('users')->where('id', $id)
                    ->update([
                        'countdownlist' => 1]);
		/*echo 'hit';
		echo ' ';
		echo $repid;
		echo ' ';
		echo Input::get('countdownlist');*/
        //Redirect to page
        return Redirect::to('wealthpage/introduction')->with('message', 'Your message has been sent. Thank You!');
        
    } 
	public function StepWealth()
    {
		$id = Auth::user()->id;
		DB::table('users')->where('id', $id)
                    ->update([
                        'wealthlist' => 1]);
		/*echo 'hit';
		echo ' ';
		echo $repid;
		echo ' ';
		echo Input::get('countdownlist');*/
        //Redirect to page
        return Redirect::to('services')->with('message', 'Your message has been sent. Thank You!');
        
    }  
	
	/*public function Adresponse()
	{	
        return view('career.adresponseemail.resume1')->with('seoValues');
	}*/
	
	public function Partnersworkwith()
	{	
	    $seoValues = $this->getSeoValues()['careerNext'];
        return view('career.partnersworkwith')->with('seoValues');
	}
	
	public function Industryoverview()
	{	
	    $seoValues = $this->getSeoValues()['careerNext'];
        return view('career.industryoverview')->with('seoValues');
	}
	
	public function Wordfromowners()
	{	
	    $seoValues = $this->getSeoValues()['careerNext'];
        return view('career.wordfromowners')->with('seoValues');
	}
	public function Job_Application()
	{	
	    $seoValues = $this->getSeoValues()['careerNext'];
        return view('career.job_application')->with('seoValues');
	}
	
	
	
	
	
	
	
	
	
	

	public function getSeoValues()
	{
		$seoHelpers = new SeoHelpers();
		return $seoHelpers->SeoValues(); 
	}

    public function getMailValues()
    {
        $mailHelpers = new MailHelpers();
        return $mailHelpers->ContactForm();
    }

	public function index()
	{	
        $seoValues = $this->getSeoValues()['career'];
        return view('career.index')->with('seoValues');
	}
	
	public function FutureCareer($src = null)
	{	
		$thesrc = ' ';
		switch(strtolower($src))
        {
            case 'j2c':
                $thesrc = 'job2career';
                break;
			case 'monster':
                $thesrc = 'monster';
                break;
			case '':
                $thesrc = 'default';
                break;
		}
		
        $seoValues = $this->getSeoValues()['career'];
		return View::make('career.futurecareer', compact('seoValues', 'thesrc'));
	}
	
	public function RecruiterCareer()
	{
		$seoValues = $this->getSeoValues()['career'];
        return view('career.recruiter')->with('seoValues');	
	}
	
	public function CareerMain()
	{
		$seoValues = $this->getSeoValues()['careerMain'];
        return view('career.career_main')->with('seoValues');	
	}
	
	public function introduction()
	{
        $seoValues = $this->getSeoValues()['careerIntro'];
        return view('career.introduction')->with('seoValues');
	}
	
	public function selection()
	{
        $seoValues = $this->getSeoValues()['careerSelection'];
        return view('career.selection')->with('seoValues');
	}
	
	public function training()
	{
        $seoValues = $this->getSeoValues()['careerTraining'];
        return view('career.training')->with('seoValues');
	}
	
	public function leads()
	{
        $seoValues = $this->getSeoValues()['careerLeads'];
        return view('career.leads')->with('seoValues');
	}
	
	public function sales()
	{
        $seoValues = $this->getSeoValues()['careerSales'];
        return view('career.sales')->with('seoValues');
	}
	
	public function equipment()
	{
        $seoValues = $this->getSeoValues()['careerEquipment'];
        return view('career.equipment')->with('seoValues');
	}

	public function compensation()
	{
        $seoValues = $this->getSeoValues()['careerCompensation'];
        return view('career.compensation')->with('seoValues');
	}	
	
	public function benefits()
	{
        $seoValues = $this->getSeoValues()['careerBenefits'];
        return view('career.benefits')->with('seoValues');
	}
	
	public function advancement()
	{
        $seoValues = $this->getSeoValues()['careerAdvancement'];
        return view('career.advancement')->with('seoValues');
	}
	
	//zr
	
	//zr end

	

    public function CareerThankYou()
    {
        $seoValues = $this->getSeoValues()['career'];
        return view('career.careerThankYou')->with('seoValues');
    }

    public function Areas()
    {
        $areaList = DB::table('areas')->orderBy('state', 'asc')->orderBy('city', 'asc')->get();

        $seoValues = $this->getSeoValues()['career'];
        return view('career.areas', compact('seoValues', 'areaList'));
    }

    public function City($cityName)
    {
        $cityStateList = explode("-", $cityName);

        $seoValues = $this->getSeoValues()['careerCity'];

        $areaList = [
            'city' => $cityStateList[0],
            'state' => $cityStateList[1]
        ];

        return view('career.city', compact('seoValues', 'areaList'));
    }
	
	public function SaveResume(Request $request)
	{
		$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'phone' => 'required',
			'email' => 'required',
			'message' => 'required',
			'resume' => 'required',
		]);

	}

    public function CareerSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('firstname', 'lastname', 'phone', 'zipcode', 'email', 'msg', 'resume');
		
        //Validation rules
        $rules = array(
            'firstname' => 'required',
			'lastname' => 'required',
            'phone' => 'required',
			'zipcode' =>'required',
			'email' => 'required|email',
            'resume' => 'required'
        );

        //Validate data
        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        $resumeFile = array('firstname' => Input::get('firstname'),
							'lastname' => Input::get('lastname'),
                            'email' => Input::get('email'),
                            'phone' => Input::get('phone'),
                            'msg' => Input::get('msg'),
                            'resume' => Input::file('resume'));

        $userCheck = DB::table('users')->where('email', Input::get('email'))->count();

        if($userCheck > 0)
        {
            $errors->add('email', 'A duplicate email has been found.');
        }

        if ($validator->passes() && $errors->count() < 1)
        {

			
            //Email to Ameribanc
            Mail::send('emails.contactForm', $resumeFile, function ($message) use ($resumeFile) {
				$stamp = time();
				$cur_date = date($stamp);
                $mailValues = $this->getMailValues();
                $contactEmail = $mailValues['careerEmail'];
				
				if(Input::get('fromsite') == 'job2career'){
					$toEmail = 'jobs2careersresume@ameribancmail.com';
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'New Resume From job2career';
	
					$message->from($fromEmail);
					$message->to($toEmail);
					$message->subject($subject);
					
					$destinationPath = '';
					$filename        = '';
				
					if (Input::hasFile('resume')) {
						$file            = Input::file('resume');
						$destinationPath = public_path().'/resumes/job2career/';
						$filename        = $cur_date.'_'.rand().'_'.$resumeFile['lastname'].'_'.$file->getClientOriginalName();
						$uploadSuccess   = $file->move($destinationPath, $filename);
					}
					$path = 'resumes' . '/job2career/' . $filename;
					$message->attach($path);
				}
				else if(Input::get('fromsite') == 'monster'){
					$toEmail = 'monsterppc@ameribancmail.com';
					$fromEmail = $contactEmail['fromEmail'];
					$subject = 'New Resume From Monsterppc';
	
					$message->from($fromEmail);
					$message->to($toEmail);
					$message->subject($subject);
					
					$destinationPath = '';
					$filename        = '';
				
					if (Input::hasFile('resume')) {
						$file            = Input::file('resume');
						$destinationPath = public_path().'/resumes/monsterppc/';
						$filename        = $cur_date.'_'.rand().'_'.$resumeFile['lastname'].'_'.$file->getClientOriginalName();
						$uploadSuccess   = $file->move($destinationPath, $filename);
					}
					$path = 'resumes' . '/monsterppc/' . $filename;
					$message->attach($path);
				}
				else{
					$toEmail = 'websiteresume@ameribancmail.com';
					$fromEmail = $contactEmail['fromEmail'];
					$subject = $contactEmail['subject'];
	
					$message->from($fromEmail);
					$message->to($toEmail);
					$message->subject($subject);
					
					$destinationPath = '';
					$filename        = '';
				
					if (Input::hasFile('resume')) {
						$file            = Input::file('resume');
						$destinationPath = public_path().'/resumes/mainsite';
						$filename        = $cur_date.'_'.rand().'_'.$resumeFile['lastname'].'_'.$file->getClientOriginalName();
						$uploadSuccess   = $file->move($destinationPath, $filename);
					}
					$path = 'resumes' . '/mainsite/' . $filename;
					$message->attach($path);
				}
                
				/*$message->attach($resumeFile['resume'], array(
                    'as' => 'resume.' . $resumeFile['resume']->getClientOriginalName(), //. $resumeFile['resume']->getClientOriginalExtension()
                    'mime' => $resumeFile['resume']->getMimeType()));*/
            });
			
			
            $tempPassword = str_random(10);

            if (Input::get('position') == 'Sales Professional') {
				$now = new DateTime();
                DB::table('users')->where('id', Input::get('id'))
                    ->insert([
                        'firstname' => Input::get('firstname'),
						'lastname' => Input::get('lastname'),
						'name' => Input::get('firstname').' '.Input::get('lastname'),
                        'username' => Input::get('email'),
                        'email' => Input::get('email'),
                        'password' => Hash::make($tempPassword),
                        'repid' => 0,
						'zipcode' => Input::get('zipcode'),
                        'role_id' => 6,
                        'active' => 1,
                        'created_at' => $now->format('Y-m-d H:i:s'),
                        'updated_at' => $now->format('Y-m-d H:i:s'),
						'applied' => Input::get('page'),
						'fromsite' => Input::get('fromsite')]);

                $thankYouInfo = array('msg' => 'Your information has been received.',
                    'username'=> Input::get('email'),
                    'password' => $tempPassword,
                    'toEmail' => Input::get('email'));

                //Email to User
                Mail::send('emails.thankYouLogin', $thankYouInfo, function ($message) use ($thankYouInfo) {
                    $mailValues = $this->getMailValues();
                    $contactEmail = $mailValues['careerEmail'];

                    $fromEmail = $contactEmail['fromEmail'];
                    $subject = 'Thank You';

                    $message->from($fromEmail);
                    $message->to(array_get($thankYouInfo, 'toEmail'));
                    $message->subject($subject);
                });
            }
            else
            {
                $thankYouInfo = array('msg' => 'Your message has been received.  A representative will contact you.',
                    'toEmail' => Input::get('email'));

                //Email to User
                Mail::send('emails.thankYou', $thankYouInfo, function ($message) use ($thankYouInfo) {
                    $mailValues = $this->getMailValues();
                    $contactEmail = $mailValues['careerEmail'];

                    $fromEmail = $contactEmail['fromEmail'];
                    $subject = 'Thank You';

                    $message->from($fromEmail);
                    $message->to(array_get($thankYouInfo, 'toEmail'));
                    $message->subject($subject);
                });
            }


            //Redirect to page
			if(Input::get('fromsite') == 'job2career'){
				return redirect('thank-you-question')->with('seoValues');
			}else{
            	return Redirect::route('careerThankYou')
                ->with('message', 'Your resume has been submitted. Thank You!');
			}
        } else {

            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	public function ThankYouQSubmit()
    {
		//Get all the data and store it inside Store Variable
        $data = Input::only('expyesno');
		
        //Validation rules
        $rules = array(
            'expyesno' => 'required'
        );
		
		$messages = array(
			'expyesno.required' => 'We need you to select YES or NO!',
		);

        //Validate data
        $validator = Validator::make($data, $rules, $messages);
        $errors = $validator->messages();


        if ($validator->passes() && $errors->count() < 1)
        {
			if (Input::get('expyesno') == 'yes') {
				$thankyoupage = 'thank-you-tag';	
			}else{
				$thankyoupage = 'thank-you-not-qualified';	
			}
			
			$seoValues = $this->getSeoValues()['career'];
        	return redirect($thankyoupage)->with('seoValues');
		}else{
			return Redirect::back()->withErrors($errors);
		}
        
    }

}
