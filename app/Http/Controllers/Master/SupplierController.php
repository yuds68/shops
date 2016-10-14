<?php namespace App\Http\Controllers\Master;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller {

	public function getIndex(){
		return view('master.supplier');
	}
}
