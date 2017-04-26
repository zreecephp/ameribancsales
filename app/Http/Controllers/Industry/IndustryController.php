<?php namespace App\Http\Controllers\Industry;

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


class IndustryController extends Controller {


	public function __construct()
	{

	}
	
	public function GetUserInfo()
    {
        return  [
            'name' => Auth::user()->name,
            'role_id' => Auth::user()->role_id,
            'menuItem' => 'industry',
            'pageTitle' => '',
        ];
    }
	
	public function getSeoValues()
	{
		$seoHelpers = new SeoHelpers();
		return $seoHelpers->SeoValues(); 
	}

	public function News_public()
	{
        $seoValues = $this->getSeoValues()['industry'];
		$getarticleposts = $this->GetTopPublicArticle();
		$getvideoposts = $this->GetTopPublicVideo();
		return view('industry.news_public')->with(compact('getarticleposts', 'getvideoposts', 'seoValues'));
	}
	
	public function News_private()
	{
        $seoValues = $this->getSeoValues()['industry'];
		$getarticleposts = $this->GetTopPrivateArticle();
		$getvideoposts = $this->GetTopPrivateVideo();
		$adminModel = $this->GetUserInfo();
		return view('my.news_private')->with(compact('getarticleposts', 'getvideoposts', 'adminModel', 'seoValues'));
	}
	
	public function Post_news()
	{
		$adminModel = $this->GetUserInfo();
		return view('my.post_news')->with(compact('adminModel'));	
	}
	
	public function PostNewsSubmit()
    {
        //Get all the data and store it inside Store Variable
        $data = Input::only('postdate', 'contentpost', 'posttype', 'postsection', 'posturl');
        //Validation rules
        $rules = array (
            'postdate' => 'required',
			'contentpost' => 'required',
            'posttype' => 'required',
            'postsection' => 'required'
        );

        $validator = Validator::make($data, $rules);
        $errors = $validator->messages();

        if ($data['postdate'] == "") {
            $errors->add('postdate', 'Error Date variable not defined.');
        }
		if ($data['contentpost'] == "") {
            $errors->add('contentpost', 'Must add content.');
        }
        if ($data['posttype'] == "") {
            $errors->add('posttype', 'You need to select a Post Type.');
        }
        if ($data['postsection'] == "") {
            $errors->add('postsection', 'You need to select an Article or Video.');
        }
		

        if ($validator -> passes() && $errors->count() < 1)
        {
			$postdate = $data['postdate'];
			$contentpost = $data['contentpost'];
			$posttype = $data['posttype'];
			$postsection = $data['postsection'];
			$posturl = $data['posturl'];
			
			if($posttype == 'public'){ $thetype = 'public'; }
			if($posttype == 'private'){ $thetype = 'private'; }
			if($posttype == 'rss_feed'){ $thetype = 'rss_feed'; }
			if($postsection == 'article'){ $thesection = 'article'; }
			if($postsection == 'video'){ $thesection = 'video'; }
			
            $this->UpdateIndustryNews($postdate, $contentpost, $thetype, $thesection, $posturl);
			// $posttype, $postsection,
			
            //Redirect to page
            return Redirect::to('my/news_private');

        }else {
            //return contact form with errors
            return Redirect::back()->withErrors($errors);
        }
    }
	private function UpdateIndustryNews($postdate, $contentpost, $thetype, $thesection, $posturl)
	// $posttype, $postsection,
    {
            DB::table('industry_news')->insert(array(
				'datecreated' => $postdate,
                'post' => $contentpost,
                $thetype => '1',
                $thesection => '1',
				'user' => Auth::user()->username,
				'url_link' => $posturl
            ));
    }

	public function GetTopPublicArticle()
	{
		
		$getarticleposts = DB::table('industry_news')
		->where('public', '=', '1')
		->where('article', '=', '1')
		->orderBy('id', 'DESC')
		->take(10)
		->get();
		
		//print_r($gettheposts);
		return $getarticleposts;
	}
	public function GetTopPrivateArticle()
	{
		
		$getarticleposts = DB::table('industry_news')
		->where('article', '=', '1')
		->orderBy('id', 'DESC')
		->take(10)
		->get();
		
		//print_r($gettheposts);
		return $getarticleposts;
	}
/* video posts */
	public function GetTopPublicVideo()
	{
		
		$getvideoposts = DB::table('industry_news')
		->where('public', '=', '1')
		->where('video', '=', '1')
		->orderBy('id', 'DESC')
		->take(10)
		->get();
		
		//print_r($gettheposts);
		return $getvideoposts;
	}
	public function GetTopPrivateVideo()
	{
		
		$getvideoposts = DB::table('industry_news')
		->where('video', '=', '1')
		->orderBy('id', 'DESC')
		->take(10)
		->get();
		
		//print_r($gettheposts);
		return $getvideoposts;
	}

}

