<?php namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use DB;
use Hash;
use View;

class HandbookController extends Controller {


	public function __construct()
	{
        $this->middleware('auth');
	}

    public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
            'role_id' => Auth::user()->role_id,
            'menuItem' => 'handbook',
            'pageTitle' => '',
        ];
    }

	public function index()
	{
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.index', array('adminModel' => $adminModel));
	}

    public function Opportunity()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.opportunity', array('adminModel' => $adminModel));
    }

    public function TopPerformer()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.topPerformer', array('adminModel' => $adminModel));
    }

    public function Resources()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.resources', array('adminModel' => $adminModel));
    }

    public function Compensation()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.compensation', array('adminModel' => $adminModel));
    }


    public function SalesMarket()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.salesMarket', array('adminModel' => $adminModel));
    }


    public function Presentation()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.presentation', array('adminModel' => $adminModel));
    }


    public function Prospecting()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.prospecting', array('adminModel' => $adminModel));
    }


    public function Leads()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.leads', array('adminModel' => $adminModel));
    }

    public function PresentationTips()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.presentationTips', array('adminModel' => $adminModel));
    }

    public function Fees()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.fees', array('adminModel' => $adminModel));
    }

    public function AfterTheSale()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.afterTheSale', array('adminModel' => $adminModel));
    }

    public function Barn()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.barn', array('adminModel' => $adminModel));
    }

    public function ReferenceLetters()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.referenceLetters', array('adminModel' => $adminModel));
    }

    public function Faqs()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.faqs', array('adminModel' => $adminModel));
    }

    public function CommonTerms()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.commonTerms', array('adminModel' => $adminModel));
    }

    public function AboutUs()
    {
        $adminModel = $this->GetUserInfo();
        return View::make('my.handbook.aboutUs', array('adminModel' => $adminModel));
    }
}

