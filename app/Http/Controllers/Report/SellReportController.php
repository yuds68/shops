<?php namespace App\Http\Controllers\Report;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellReportController extends Controller {

	public function getIndex(){
		return view('report.sell-report');
	}
}
