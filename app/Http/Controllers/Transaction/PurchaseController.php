<?php namespace App\Http\Controllers\Transaction;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller {

	public function getIndex(){
		return view('transaction.purchase.purchase');
	}
}
