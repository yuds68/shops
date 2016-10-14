<?php namespace App\Http\Controllers\Transaction;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockOpnameController extends Controller {

	public function getIndex(){
		return view('transaction.stock-opname');
	}
}
