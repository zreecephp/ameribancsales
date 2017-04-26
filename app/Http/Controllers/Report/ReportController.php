<?php namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use DB;
use Hash;
use View;
use Response;


class ReportController extends Controller {


	public function __construct()
	{
        //$this->middleware('auth');
	}

    public function GetUserInfo()
    {
        return  [
            'name' =>"Admin User",
        ];
    }

	public function index()
	{
        $adminModel = $this->GetUserInfo();
        return View::make('reports.index', array('adminModel' => $adminModel));
	}

    public function GetUsers()
    {
        $data = DB::table('users')->select('id','username','name','email')->take(10);
        return Response::json(array(
            'Result' => 'OK',
            'TotalRecordCount' => $data->count(),
            'Records' => $data->get()-toArray()
        ));
    }

}

