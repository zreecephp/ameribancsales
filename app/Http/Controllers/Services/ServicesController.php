<?php namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use \App\Helpers\SeoHelpers;

class ServicesController extends Controller {


	public function __construct()
	{

	}

	public function getSeoValues()
	{
		$seoHelpers = new SeoHelpers();
		return $seoHelpers->SeoValues(); 
	}

	public function index()
	{
        $seoValues = $this->getSeoValues()['services'];
        return view('services.index')->with('seoValues');
	}

	public function CreditCardProcessing()
	{
        $seoValues = $this->getSeoValues()['creditCardProcessing'];
        return view('services.CreditCardProcessing')->with('seoValues');
	}
	
	public function TabletCardProcessing()
	{
        $seoValues = $this->getSeoValues()['tabletCardProcessing'];
        return view('services.TabletCardProcessing')->with('seoValues');
	}
	
	public function Groovv()
	{
        $seoValues = $this->getSeoValues()['groovv'];
        return view('services.Groovv')->with('seoValues');
	}
	
	public function MerchantCards()
	{
        $seoValues = $this->getSeoValues()['merchantCards'];
        return view('services.MerchantCards')->with('seoValues');
	}
	
	public function CheckImaging()
	{
        $seoValues = $this->getSeoValues()['checkImaging'];
        return view('services.CheckImaging')->with('seoValues');
	}

	public function MerchantLoans()
	{
        $seoValues = $this->getSeoValues()['merchantLoans'];
        return view('services.MerchantLoans')->with('seoValues');
	}

	public function MobileSolutions()
	{
        $seoValues = $this->getSeoValues()['mobileSolutions'];
        return view('services.MobileSolutions')->with('seoValues');
	}
	
	public function AuthorizeNet()
	{
        $seoValues = $this->getSeoValues()['authorizeNet'];
        return view('services.AuthorizeNet')->with('seoValues');
	}	
		
	public function EMV()
	{
        $seoValues = $this->getSeoValues()['emv'];
        return view('services.emv')->with('seoValues');
	}	
		
	public function ApplePay()
	{
        $seoValues = $this->getSeoValues()['applePay'];
        return view('services.ApplePay')->with('seoValues');
	}	
}

