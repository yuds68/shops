<?php namespace App\Http\Controllers\Master;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

class SupplierController extends Controller {

	public function getIndex(){
		$supplier = Supplier::paginate(config('constants.PAGINATION'));

		return view('master.supplier.supplier')->with('supplier', $supplier);
	}

	public function getInput(){
		return view('master.supplier.supplier-input');
	}

	public function postSave(Request $request){
		$data = $request->all();
		$supplier = new Supplier();
		$errorBag = $supplier->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('supplier');
		} else {

			if(isset($data['id'])){
				$supplier = Supplier::find($data['id']);
				
				if($supplier == null){
					$supplier = new Supplier();
				}
			}
			
			$supplier->doParams($supplier, $data);
			$supplier->save();
			
			return redirect('supplier')->with('message', array('Data supplier berhasil di simpan'))
					->withInput($supplier->toArray());
		}
	}

	public function postLoadData(){
    	$this->layout = null;
    	$passvalue = Input::all();

        if(isset($passvalue['id'])){
            $supplier = Supplier::find($passvalue['id']);

            if($supplier == null){
            	Session::flash('error', array('pass value dengan id ' . $passvalue['ID'] . ' tidak ditemukan'));
            	return Redirect::to('supplier');
            }

            return Redirect::to('supplier/input')->withInput($supplier->toArray());
        }

        Session::flash('error', array('Nothing to load'));
    	return Redirect::to('supplier');
    }

	public function getDelete($id){
		$supplier = Supplier::find($id);
		
		if(!$supplier == null){
			$supplier->delete();
			
			return redirect('supplier')->with('message', array('Data supplier berhasil di hapus'));
		}
	}

	public function getChangeStatus($id){
		$supplier = Supplier::find($id);
		
		if(isset($supplier)){
			if($supplier->status == config('constants.ACTIVE')){
				$supplier->status = config('constants.INACTIVE');
			} else {
				$supplier->status = config('constants.ACTIVE');
			}
			
			$supplier->save();
			$supplier = Supplier::paginate(config('constants.PAGINATION'));
			
			return redirect('supplier')->with('message', array('Status berhasil di ubah'))
					->withInput($supplier->toArray());
		}
	}
}
