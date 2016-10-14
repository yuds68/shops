<?php namespace App\Http\Controllers\Main;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller {

	public function getIndex(){
		return view('main.main-page');
	}
}
