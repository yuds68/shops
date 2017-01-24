<?php namespace App\Http\Controllers\Report;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleReportController extends Controller {

	public function getIndex(){
		return view('report.salereport.sale-report');
	}
}
