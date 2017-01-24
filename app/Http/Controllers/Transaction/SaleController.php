<?php namespace App\Http\Controllers\Transaction;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller {

	public function getIndex(){
		return view('transaction.sale.sale');
	}

	public function getInput(){
		return view('transaction.sale.sale-input');
	}

	public function postSave(Request $request){
		$data = $request->all();
		$sale = new Sale();
		$errorBag = $sale->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('sale');
		} else {

			if(isset($data['id'])){
				$sale = Sale::find($data['id']);
				
				if($sale == null){
					$sale = new Sale();
				}
			}
			
			$sale->doParams($sale, $data);
			$sale->save();
			
			$this->postSaveDetail($request);
			
			return redirect('sale')->with('message', array('Data penjualan berhasil di simpan'))
					->withInput($sale->toArray());
		}
	}

	private function postSaveDetail(Request $request){
		$data = $request->all();
		$sale = new Sale();
		$errorBag = $sale->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('sale');
		} else {

			if(isset($data['id'])){
				$sale = Sale::find($data['id']);
				
				if($sale == null){
					$sale = new Sale();
				}
			}
			
			$sale->doParams($sale, $data);
			$sale->save();
			
			return redirect('sale')->with('message', array('Data penjualan berhasil di simpan'))
					->withInput($sale->toArray());
		}
	}

	public function postLoadData(){
    	$this->layout = null;
    	$passvalue = Input::all();

        if(isset($passvalue['id'])){
            $sale = Sale::find($passvalue['id']);

            if($sale == null){
            	Session::flash('error', array('pass value dengan id ' . $passvalue['ID'] . ' tidak ditemukan'));
            	return Redirect::to('sale');
            }

            return Redirect::to('sale/input')->withInput($sale->toArray());
        }

        Session::flash('error', array('Nothing to load'));
    	return Redirect::to('sale');
    }

	public function getDelete($id){
		$sale = Sale::find($id);
		
		if(!$sale == null){
			$sale->delete();
			
			return redirect('sale')->with('message', array('Data penjualan berhasil di hapus'));
		}
	}
}
