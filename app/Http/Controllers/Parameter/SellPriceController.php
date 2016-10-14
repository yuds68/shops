<?php namespace App\Http\Controllers\Parameter;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellPriceController extends Controller {

	public function getIndex(){
		return view('parameter.sell-price');
	}
}
