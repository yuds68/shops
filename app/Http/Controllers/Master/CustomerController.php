<?php namespace App\Http\Controllers\Master;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller {

	public function getIndex(){
		$customer = Customer::paginate(config('constants.PAGINATION'));

		return view('master.customer.customer')->with('customer', $customer);
	}

	public function getInput(){
		return view('master.customer.customer-input');
	}

	public function postSave(Request $request){
		$data = $request->all();
		$customer = new Customer();
		$errorBag = $customer->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('customer');
		} else {

			if(isset($data['id'])){
				$customer = Customer::find($data['id']);
				
				if($customer == null){
					$customer = new Customer();
				}
			}
			
			$customer->doParams($customer, $data);
			$customer->save();
			
			return redirect('customer')->with('message', array('Data customer berhasil di simpan'))
					->withInput($customer->toArray());
		}
	}

	public function postLoadData(){
    	$this->layout = null;
    	$passvalue = Input::all();

        if(isset($passvalue['id'])){
            $customer = Customer::find($passvalue['id']);

            if($customer == null){
            	Session::flash('error', array('pass value dengan id ' . $passvalue['ID'] . ' tidak ditemukan'));
            	return Redirect::to('customer');
            }

            return Redirect::to('customer/input')->withInput($customer->toArray());
        }

        Session::flash('error', array('Nothing to load'));
    	return Redirect::to('customer');
    }

	public function getDelete($id){
		$customer = Customer::find($id);
		
		if(!$customer == null){
			$customer->delete();
			
			return redirect('customer')->with('message', array('Data customer berhasil di hapus'));
		}
	}

	public function getChangeStatus($id){
		$customer = Customer::find($id);
		
		if(isset($customer)){
			if($customer->status == config('constants.ACTIVE')){
				$customer->status = config('constants.INACTIVE');
			} else {
				$customer->status = config('constants.ACTIVE');
			}
			
			$customer->save();
			$customer = Customer::paginate(config('constants.PAGINATION'));
			
			return redirect('customer')->with('message', array('Status berhasil di ubah'))
					->withInput($customer->toArray());
		}
	}
}
