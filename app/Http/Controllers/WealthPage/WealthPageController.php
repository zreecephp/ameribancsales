<?php namespace App\Http\Controllers\WealthPage;

use App\Http\Controllers\Controller;
use \App\Helpers\SeoHelpers;

class WealthPageController extends Controller {


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
        $seoValues = $this->getSeoValues()['wealthpage'];
        return view('wealthpage.index')->with('seoValues');
	}
	public function Introduction()
	{
        $seoValues = $this->getSeoValues()['wealthpageintro'];
        return view('wealthpage.introduction')->with('seoValues');
	}
	public function Opportunity()
	{
        $seoValues = $this->getSeoValues()['wealthpageopportunity'];
        return view('wealthpage.opportunity')->with('seoValues');
	}
	public function Testimonials()
	{
        $seoValues = $this->getSeoValues()['wealthpagetestimonials'];
        return view('wealthpage.testimonials')->with('seoValues');
	}
	public function Research()
	{
        $seoValues = $this->getSeoValues()['wealthpageresearch'];
        return view('wealthpage.research')->with('seoValues');
	}
	public function Faqs()
	{
        $seoValues = $this->getSeoValues()['wealthpagefaqs'];
        return view('wealthpage.faqs')->with('seoValues');
	}
	public function NextStep()
	{
        $seoValues = $this->getSeoValues()['wealthpagenextstep'];
        return view('wealthpage.next-step')->with('seoValues');
	}
	
}

