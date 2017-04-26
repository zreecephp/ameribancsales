<?php namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;
use Auth;
use DB;
use DateTime;
use View;
use Redirect;
use Validator;

class TrainingController extends Controller {


	public function __construct()
	{
        $this->middleware('auth');
	}

    public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
			'email' => Auth::user()->email,
            'role_id' => Auth::user()->role_id,
			'cert_completed' => Auth::user()->certification_completed,
            'menuItem' => 'training',
            'pageTitle' => '',
        ];
    }

	public function Module1()
	{
        $completedQuiz = $this->GetCompetedQuiz(1);
        $adminModel = $this->GetUserInfo();
        return view('my.training.module1', compact('adminModel', 'completedQuiz'));
	}

    public function Module2()
    {
        $completedQuiz = $this->GetCompetedQuiz(2);

        $adminModel = $this->GetUserInfo();
        return view('my.training.module2', compact('adminModel', 'completedQuiz'));
    }

    public function Module3()
    {
        $completedQuiz = $this->GetCompetedQuiz(3);

        $adminModel = $this->GetUserInfo();
        return view('my.training.module3', compact('adminModel', 'completedQuiz'));
    }

    public function Module4()
    {
        $completedQuiz = $this->GetCompetedQuiz(4);

        $adminModel = $this->GetUserInfo();
        return view('my.training.module4', compact('adminModel', 'completedQuiz'));
    }

    public function Module5()
    {
        $completedQuiz = $this->GetCompetedQuiz(5);

        $adminModel = $this->GetUserInfo();
        return view('my.training.module5', compact('adminModel', 'completedQuiz'));
    }

    public function Module6()
    {
        $completedQuiz = $this->GetCompetedQuiz(6);

        $adminModel = $this->GetUserInfo();
        return view('my.training.module6', compact('adminModel', 'completedQuiz'));
    }

    public function Module7()
    {
        $completedQuiz = $this->GetCompetedQuiz(7);

        $adminModel = $this->GetUserInfo();
        return View::make('my.training.module7', compact('adminModel', 'completedQuiz'));
    }

    public function CorporateTour()
    {
        $this->QuizCheck('Corporate Tour', 1);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.corporateTour', array('adminModel' => $adminModel));
    }

    public function CorporateTourSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer2"){
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer1") {
            $errors->add('q5', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Corporate Tour', 1);

            //Redirect to page
            return Redirect::route('module1')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function AmexCcdc()
    {
        $this->QuizCheck('AMEX CCDC Presentation', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.amexCcdc', array('adminModel' => $adminModel));
    }

    public function AmexCcdcSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('AMEX CCDC Presentation', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function AmexCcdcRecap()
    {
        $this->QuizCheck('AMEX CCDC Recap', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.amexCcdcRecap', array('adminModel' => $adminModel));
    }

    public function AmexCcdcRecapSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('AMEX CCDC Recap', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function AmpIntro()
    {
        $this->QuizCheck('AMP Intro', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.ampIntro', array('adminModel' => $adminModel));
    }

    public function AmpIntroSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('AMP Intro', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function AmpPresentation()
    {
        $this->QuizCheck('AMP Presentation', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.ampPresentation', array('adminModel' => $adminModel));
    }

    public function AmpPresentationSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('AMP Presentation', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            return Redirect::back()->withErrors($errors);
			//return contact form with errors
            //return Redirect::back()->withErrors($errors);
        }
    }

    public function AmpRecap()
    {
        $this->QuizCheck('AMP Recap', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.ampRecap', array('adminModel' => $adminModel));
    }

    public function AmpRecapSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('AMP Recap', 4);

            //Redirect to page
            return Redirect::route('module5')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function Appointments()
    {
        $this->QuizCheck('Appointments', 6);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.appointments', array('adminModel' => $adminModel));
    }

    public function AppointmentsSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
			'q4' => 'required',
            'q5' => 'required',
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer3") {
            $errors->add('q5', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Appointments', 6);

            //Redirect to page
            return Redirect::route('module6')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }  
    }  

    public function AppointmentSetting()
    {
        $this->QuizCheck('Appointment Setup', 6);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.appointmentSetting', array('adminModel' => $adminModel));
    }

    public function AppointmentSettingSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q5', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q5', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q5', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }


        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Appointment Setup', 6);

            //Redirect to page
            return Redirect::route('module7')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
    public function ClosingOverview()
    {
        $this->QuizCheck('Closing Overview 2', 5);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.closingOverview', array('adminModel' => $adminModel));
    }

    public function ClosingOverviewSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q5', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q5', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q5', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Closing Overview 2', 5);

            //Redirect to page
            return Redirect::route('module5')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function ConsultationOverview()
    {
        $this->QuizCheck('Consultation Overview', 1);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.consultationOverview', array('adminModel' => $adminModel));
    }

    public function ConsultationOverviewSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer2") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer3") {
            $errors->add('q5', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Consultation Overview', 1);

            //Redirect to page
            return Redirect::route('module2')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function CreditCard01()
    {
        $this->QuizCheck('CC101 Seg 1', 2);
        $adminModel = $this->GetUserInfo();
         return View::make('my.training.creditCard01', array('adminModel' => $adminModel));
    }

    public function CreditCard01Submit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer2") {
            $errors->add('q5', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('CC101 Seg 1', 2);
            //Redirect to page
            return Redirect::route('module2')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function CreditCard02()
    {
        $this->QuizCheck('CC101 Seg 2', 2);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.creditCard02', array('adminModel' => $adminModel));
    }

    public function CreditCard02Submit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5', 'q6');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer2") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer1") {
            $errors->add('q3', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q6'] != "Answer2") {
            $errors->add('q6', 'Question 6 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('CC101 Seg 2', 2);
            //Redirect to page
            return Redirect::route('module2')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function CreditCard03()
    {
        $this->QuizCheck('CC101 Seg 3', 2);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.creditCard03', array('adminModel' => $adminModel));
    }

    public function CreditCard03Submit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer2") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('CC101 Seg 3', 2);
            //Redirect to page
            return Redirect::route('module3')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function EmvNfcOverview()
    {
        $this->QuizCheck('EMV-NFC Overview', 4);
        $adminModel = $this->GetUserInfo();
         return View::make('my.training.emvNfcOverview', array('adminModel' => $adminModel));
    }

    public function EmvNfcOverviewSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('EMV-NFC Overview', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function EmvNfcRecap()
    {
        $this->QuizCheck('EMV-NFC  Recap', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.emvNfcRecap', array('adminModel' => $adminModel));
    }

    public function EmvNfcRecapSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('EMV-NFC  Recap', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function EmvNfcServiceSegment()
    {
        $this->QuizCheck('EMV-NFC  Segment', 4);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.emvNfcServiceSegment', array('adminModel' => $adminModel));
    }

    public function EmvNfcServiceSegmentSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('EMV-NFC  Segment', 4);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function FirstClose()
    {
        $this->QuizCheck('First Close', 5);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.firstClose', array('adminModel' => $adminModel));
    }

    public function FirstCloseSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q5', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q5', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q5', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('First Close', 5);

            //Redirect to page
            return Redirect::route('module5')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function SecondClose()
    {
        $this->QuizCheck('Second Close', 5);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.secondClose', array('adminModel' => $adminModel));
    }

    public function SecondCloseSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q5', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q5', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q5', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Second Close', 5);

            //Redirect to page
            return Redirect::route('module5')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function ThirdClose()
    {
        $this->QuizCheck('Third Close', 5);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.thirdClose', array('adminModel' => $adminModel));
    }

    public function ThirdCloseSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q5', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q5', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q5', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Third Close', 5);

            //Redirect to page
            return Redirect::route('module6')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function FirstFiveMin()
    {
        $this->QuizCheck('First Five Minutes', 3);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.firstFiveMin', array('adminModel' => $adminModel));
    }

    public function FirstFiveMinSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('First Five Minutes', 3);

            //Redirect to page
            return Redirect::route('module4')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function MeetTrainer()
    {
        $this->QuizCheck('Meet the Trainer', 1);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.meetTrainer', array('adminModel' => $adminModel));
    }

    public function MeetTrainerSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
           $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q5'] != "Answer2") {
            $errors->add('q5', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Meet the Trainer', 1);

            //Redirect to page
            return Redirect::route('module1')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function MerchantApp()
    {
        $this->QuizCheck('Merchant Application', 7);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.merchantApp', array('adminModel' => $adminModel));
    }
	
	public function MerchantAppSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5', 'q6');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
			'q5' => 'required',
			'q6' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q5'] != "Answer1") {
            $errors->add('q4', 'Question 5 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q6'] != "Answer2") {
            $errors->add('q4', 'Question 6 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Merchant Application', 7);
			$this->UpdateUserCert();
            //Redirect to page
            return Redirect::to('my/training/cert');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
		
		public function UpdateUserCert()
		{
			DB::table('users')->where('id', Auth::user()->id)
                ->update(['certification_completed' => new DateTime()]);	
		}
	 
	
	

    public function Opportunity()
    {
        $this->QuizCheck('Opportunity', 1);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.opportunity', array('adminModel' => $adminModel));
    }

    public function OpportunitySubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer2") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Opportunity', 1);

            //Redirect to page
            return Redirect::route('module1')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }

    public function Tactics()
    {
        $this->QuizCheck('Strategy_Tactics', 1);
        $adminModel = $this->GetUserInfo();
        return View::make('my.training.tactics', array('adminModel' => $adminModel));
    }

    public function TacticsSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('Strategy_Tactics', 1);

            //Redirect to page
            return Redirect::route('module1')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function ModuleMaster()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.moduleMaster', array('adminModel' => $adminModel));	
	}
	
	public function Ma_opportunity()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_opportunity', array('adminModel' => $adminModel));	
	}
	public function Ma_opportunitySubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_opportunity', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_controllingsuccess()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_controllingsuccess', array('adminModel' => $adminModel));	
	}
	public function Ma_controllingsuccessSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer2") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_controllingsuccess', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_barn()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_barn', array('adminModel' => $adminModel));	
	}
	public function Ma_barnSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4', 'q5');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
			'q5' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q5'] != "Answer2") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_barn', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_presentationobj()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_presentationobj', array('adminModel' => $adminModel));	
	}
	public function Ma_presentationobjSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer1") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer1") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_presentationobj', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_partnerobj()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_partnerobj', array('adminModel' => $adminModel));	
	}
	public function Ma_partnerobjSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
			'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer1") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q4'] != "Answer3") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_partnerobj', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_unsureobj()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_unsureobj', array('adminModel' => $adminModel));	
	}
	public function Ma_unsureobjSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_unsureobj', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_callin()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_callin', array('adminModel' => $adminModel));	
	}
	public function Ma_callinSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer2") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer3") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_callin', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	public function Ma_eqvsiq()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.ma_eqvsiq', array('adminModel' => $adminModel));	
	}
	public function Ma_eqvsiqSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('q1', 'q2', 'q3', 'q4');
        //Validation rules
        $rules = array (
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['q1'] != "Answer3") {
            $errors->add('q1', 'Question 1 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q2'] != "Answer2") {
            $errors->add('q2', 'Question 2 is incorrect. Please rewatch the video and try the quiz again.');
        }
        if ($data['q3'] != "Answer3") {
            $errors->add('q3', 'Question 3 is incorrect. Please rewatch the video and try the quiz again.');
        }
		if ($data['q4'] != "Answer1") {
            $errors->add('q4', 'Question 4 is incorrect. Please rewatch the video and try the quiz again.');
        }

        if ($validator -> passes() && $errors->count() < 1)
        {
            $this->UpdateQuizLog('ma_eqvsiq', 8);

            //Redirect to page
            return Redirect::route('moduleMaster')->with('message', 'Your message has been sent. Thank You!');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	
	
	
	
	
	
	
	public function Cert()
	{
		$adminModel = $this->GetUserInfo();
        return View::make('my.training.cert', array('adminModel' => $adminModel));	
	}
	
	

    public function Completion($moduleNo, $quizNo)
    {
        $currentQuiz = "";
        $nextUrl = '/my/training/$quizNo';

        switch($moduleNo)
        {
            case 1:
                switch($quizNo)
                {
                    case 1:
                        $currentQuiz ="Corporate Tour";
                        $nextUrl ="/my/training/meetTrainer";
                        break;
                    case 2:
                        $currentQuiz ="Meet The Trainer";
                        $nextUrl ="/my/training/opportunity";
                        break;
                    case 3:
                        $currentQuiz ="Opportunity";
                        $nextUrl ="/my/training/tactics";
                        break;
                    case 4:
                        $currentQuiz ="Strategy_Tactics";
                        $nextUrl ="/my/training/consultationOverview";
                        break;
                    case 6:
                        $currentQuiz ="Consultation Overview";
                        $nextUrl ="my/training/module2";
                        break;
						
                }
                break;
        }
        $nextQuiz = "";
        $nextPage = "";

        $compValues = [
            'quizName' => $currentQuiz,
            'nextUrl' => $nextUrl,
            'completionDate' => date("m/d/Y")
        ];

        $adminModel = $this->GetUserInfo();
        return view('my.training.completion', compact('adminModel', 'compValues'));
    }
	
	

    private function GetCompletedQuiz($status, $currentQuiz, $completedQuiz)
    {
        if($status = 'Completed')
        {
            if($currentQuiz > $completedQuiz)
            {
                $completedQuiz = $currentQuiz;
            }
        }
        return $completedQuiz;
    }



    private function GetCompetedQuiz($moduleNo)
    {
        $returnCount = 0;
        switch($moduleNo) {
            case 1:
                return $this->CheckCompetedQuiz($moduleNo);
                break;
            case 2:
				return $this->CheckCompetedQuiz($moduleNo);
                //$returnCount = 5;
                break;
            case 3:
                return $this->CheckCompetedQuiz($moduleNo);
				//$returnCount = 3;
                break;
            case 4:
                return $this->CheckCompetedQuiz($moduleNo);
				//$returnCount = 1;
                break;
            case 5:
                return $this->CheckCompetedQuiz($moduleNo);
				//$returnCount = 8;
                break;
            case 6:
                return $this->CheckCompetedQuiz($moduleNo);
				//$returnCount = 4;
                break;
            case 7:
                return $this->CheckCompetedQuiz($moduleNo);
				//$returnCount = 2;
                break;
        }
        if($this->CheckCompetedQuiz($moduleNo - 1) < $returnCount)
        {
            return -1;
        }else{
            return $this->CheckCompetedQuiz($moduleNo);
        }
    }

    private function CheckCompetedQuiz($moduleNo)
    {
        $competedQuiz = DB::table('quiz_log')
            ->leftJoin('quiz', 'quiz_log.quiz_id', '=', 'quiz.id')
            ->where('quiz_log.user_id', Auth::user()->id)
            ->where('completed_datetime', '>', '1990-01-01 12:00:00')
            ->max('quiz_log.quiz_id');
        return ($competedQuiz == null) ? 0 : $competedQuiz;
		/* Testing purposes in MySQL Workbench
		SELECT max(quiz_log.quiz_id) from quiz_log
		LEFT JOIN quiz
		ON quiz_log.quiz_id = quiz.id
		WHERE quiz_log.user_id = 8*/   
	}

    private function QuizCheck($quizName, $moduleNo)
    {
        $quizId = DB::table('quiz')->where('name', $quizName)->where('module_no', $moduleNo)->pluck('quiz_no');
        $quizLogId = DB::table('quiz_log')->where('user_id', Auth::user()->id)->where('quiz_id', $quizId)->pluck('id');
		echo $quizId + ' ' + $quizLogId;
        if($quizLogId == null) {
            DB::table('quiz_log')->insert(array(
                'quiz_id' => $quizId,
                'user_id' => Auth::user()->id,
                'start_datetime' => new DateTime(),
                'completed_datetime' => null
            ));
        }
    }

    private function UpdateQuizLog($quizName, $moduleNo)
    {
        $quizId = DB::table('quiz')->where('name', $quizName)->where('module_no', $moduleNo)->pluck('id'); //7
        $quizLogId = DB::table('quiz_log')->where('user_id', Auth::user()->id)->where('quiz_id', $quizId)->pluck('quiz_id');//7
        if ($quizLogId == null) {
            DB::table('quiz_log')->insert(array(
                'quiz_id' => $quizId,
                'user_id' => Auth::user()->id,
                'start_datetime' => new DateTime(),
                'completed_datetime' => new DateTime()
            ));
        } else
        {
            DB::table('quiz_log')->where('quiz_id', $quizLogId)->where('user_id', Auth::user()->id)
                ->update(['completed_datetime' => new DateTime()]);
        }
    }
}

