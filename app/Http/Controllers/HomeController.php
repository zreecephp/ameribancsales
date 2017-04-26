<?php namespace App\Http\Controllers;

use \App\Helpers\SeoHelpers;
use \App\Helpers\MailHelpers;
use Illuminate\Support\Facades\Input;
use DateTime;
use DB;
use Mail;
use Redirect;
use Validator;

class HomeController extends Controller {

	public function __construct()
	{
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
	
	// index is home
	public function index()
	{
		$seoValues = $this->getSeoValues()['home'];
		return view('home')->with('seoValues');
	}

	public function About()
	{
        $seoValues = $this->getSeoValues()['about'];
        return view('about')->with('seoValues');
	}

    public function ThankYou()
    {
        $seoValues = $this->getSeoValues()['default'];
        return view('thankYou')->with('seoValues');
    }
	
	public function ThankYouTag()
    {	
        $seoValues = $this->getSeoValues()['default'];
        return view('thankYouTag')->with('seoValues');
    }
	
	public function ThankYouTagQ()
    {	
        $seoValues = $this->getSeoValues()['default'];
        return view('thankYouTagQ')->with('seoValues');
    }
	
	public function ThankYouNotQual()
    {	
        $seoValues = $this->getSeoValues()['default'];
        return view('thankYouNotQual')->with('seoValues');
    }
	
	/*public function Template()
	{
        $seoValues = $this->getSeoValues()['template'];
        return view('template')->with('seoValues');
	}*/

	public function Contact()
	{
        $seoValues = $this->getSeoValues()['contact'];
        return view('contact')->with('seoValues');
	}

    public function ContactSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('firstname', 'lastname', 'email', 'msg');

        //Validation rules
        $rules = array(
            'firstname' => 'required',
			'lastname' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:5'
        );

        //Validate data
        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {

            //Email to Ameribanc
            Mail::send('emails.contactForm', $data, function ($message) {
                $mailValues = $this->getMailValues();
                $contactEmail = $mailValues['contactEmail'];

                $toEmail = $contactEmail['toEmail'];
                $fromEmail = $contactEmail['fromEmail'];
                $subject = $contactEmail['subject'];

                $message->from($fromEmail);
                $message->to($toEmail);
                $message->subject($subject);

            });

            $thankYouInfo = array('msg' => 'Your message has been received.  A representative will contact you.',
                'toEmail' => Input::get('email'));
            //Email to User
            Mail::send('emails.thankYou', $thankYouInfo, function ($message) use ($thankYouInfo) {
                $mailValues = $this->getMailValues();
                $contactEmail = $mailValues['contactEmail'];

                $fromEmail = $contactEmail['fromEmail'];
                $subject = 'Thank You';

                $message->from($fromEmail);
                $message->to(array_get($thankYouInfo, 'toEmail'));
                $message->subject($subject);


            });

            //Redirect to page
            return Redirect::route('thankYou')->with('message', 'Your message has been sent. Thank You!');

        } else {
            //return contact form with errors
            return Redirect::back()->withErrors($validator);
        }
    }

    public function BusinessServiceInfo()
    {
        $seoValues = $this->getSeoValues()['contact'];
        return view('businessServiceInfo')->with('seoValues');
    }

    public function BusinessServiceSubmit()
    {
        $service = '';

        $service = $service . Input::get('emv') . ', ';
        $service = $service . Input::get('rateReview') . ', ';
        $service = $service . Input::get('applePay') . ', ';
        $service = $service . Input::get('giftCard') . ', ';
        $service = $service . Input::get('mobile') . ', ';
        $service = $service . Input::get('loans') . ', ';
        $service = $service . Input::get('internet') . ', ';
        $service = $service . Input::get('check') . ', ';

        $businessInfo = array( 'name' => Input::get('name'),
                                'address' => Input::get('address'),
                                'city' => Input::get('city'),
                                'state' => Input::get('state'),
                                'zip' => Input::get('zip'),
                                'email' => Input::get('email'),
                                'phone' => Input::get('phone'),
                                'msg' => Input::get('msg'),
                                'services' => $service);

         //Email to Ameribanc
        Mail::send('emails.businessInfo', $businessInfo, function ($message) {
            $mailValues = $this->getMailValues();
            $contactEmail = $mailValues['contactEmail'];

            $toEmail = $contactEmail['toEmail'];
            $fromEmail = $contactEmail['fromEmail'];
            $subject = $contactEmail['subject'];

            $message->from($fromEmail);
            $message->to($toEmail);
            $message->subject($subject);

        });

        $thankYouInfo = array('msg' => 'Your message has been received.  A representative will contact you.',
            'toEmail' => Input::get('email'));

        //Email to User
        Mail::send('emails.thankYou', $thankYouInfo, function ($message) use ($thankYouInfo) {
            $mailValues = $this->getMailValues();
            $contactEmail = $mailValues['contactEmail'];

            $fromEmail = $contactEmail['fromEmail'];
            $subject = 'Thank You';

            $message->from($fromEmail);
            $message->to(array_get($thankYouInfo, 'toEmail'));
            $message->subject($subject);
        });

        //Redirect to page
        return Redirect::route('thankYou')->with('message', 'Your message has been sent. Thank You!');

    }

    public function CustomerService($serviceType = null)
    {
		$service = array(
				'serviceType' => $serviceType,
				'isTechSupport' => '1',
				'supportMessage' => ''
			);
			
		switch($serviceType)
		{
			case 'supplies':
				array_set($service, 'supportMessage', 'I need supplies for my terminal.');
				break;
			case 'upgrade':
				array_set($service, 'supportMessage', 'I need a terminal swap or upgrade.');
				break;
			case 'service-call':
				array_set($service, 'supportMessage', 'I need a customer service call.');
				break;
			case 'tech-support':
				array_set($service, 'supportMessage', 'I need technical support or installation help.');
				break;
			case 'call-list':
				array_set($service, 'isTechSupport', '0');
				array_set($service, 'supportMessage', 'I need to have my number removed from the call list.');
				break;
			default:
				array_set($service, 'serviceType', '');
				break;

		}
	
        $seoValues = $this->getSeoValues()['contact'];
        return view('customerService', compact('seoValues', 'service'));
    }

    public function CustomerServiceSubmit()
    {
        $businessName = Input::get('businessName');
        $merchantId = Input::get('merchantId');
        $name = Input::get('name');
        $phone = Input::get('phone');
        $email = Input::get('email');
        $supportIssue = Input::get('serviceIssue');
        $callTime = Input::get('callTime');
        $notes = Input::get('notes');

        $now = new DateTime();

        DB::table('support_log')->insert(array(
            'business_name' => $businessName,
            'merchant_id' => $merchantId,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'support_issue' => $supportIssue,
            'call_time' => $callTime,
            'notes' => $notes,
            'created_at' => $now->format('Y-m-d H:i:s')
        ));

        $businessInfo = array('business_name' => $businessName,
            'merchant_id' => $merchantId,
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'support_issue' => $supportIssue,
            'call_time' => $callTime,
            'notes' => $notes,
            'toEmail' => Input::get('email'));

        //Email to Ameribanc
        Mail::send('emails.support', $businessInfo, function ($message) {
            $mailValues = $this->getMailValues();
            $contactEmail = $mailValues['customerServiceEmail'];

            $toEmail = $contactEmail['toEmail'];
            $fromEmail = $contactEmail['fromEmail'];
            $subject = $contactEmail['subject'];

            $message->from($fromEmail);
            $message->to($toEmail);
            $message->subject($subject);

        });
		
		if (Input::get('email') != '')
		{

			$thankYouInfo = array('msg' => 'Your support issue has been sent to the appropriate resource.',
				'toEmail' => Input::get('email'));

			//Email to User // thank you info is actually using the thankYou.blade.php
			Mail::send('emails.thankYou', $thankYouInfo, function ($message) use ($thankYouInfo) {
				$mailValues = $this->getMailValues();
				$contactEmail = $mailValues['customerServiceEmail'];

				$fromEmail = $contactEmail['fromEmail'];
				$subject = 'Thank You';

				$message->from($fromEmail);
				$message->to(array_get($thankYouInfo, 'toEmail'));
				$message->subject($subject);
			});
		}

        //Redirect to page
        return Redirect::route('thankYou')->with('message', 'Your message has been sent. Thank You!');

    }
}
