<?php namespace App\Http\Controllers\Master;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;

class GoodsController extends Controller {

	public function getIndex(){
		$goods = Goods::paginate(config('constants.PAGINATION'));

		return view('master.goods.goods')->with('goods', $goods);
	}

	public function getInput(){
		return view('master.goods.goods-input');
	}

	public function postSave(Request $request){
		$data = $request->all();
		$goods = new Goods();
		$errorBag = $goods->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('goods');
		} else {

			if(isset($data['id'])){
				$goods = Goods::find($data['id']);
				
				if($goods == null){
					$goods = new Goods();
				}
			}
			
			$goods->doParams($goods, $data);
			$goods->save();
			
			return redirect('goods')->with('message', array('Data barang berhasil di simpan'))
					->withInput($goods->toArray());
		}
	}

	public function postLoadData(){
    	$this->layout = null;
    	$passvalue = Input::all();

        if(isset($passvalue['id'])){
            $goods = Goods::find($passvalue['id']);

            if($goods == null){
            	Session::flash('error', array('pass value dengan id ' . $passvalue['ID'] . ' tidak ditemukan'));
            	return Redirect::to('goods');
            }

            return Redirect::to('goods/input')->withInput($goods->toArray());
        }

        Session::flash('error', array('Nothing to load'));
    	return Redirect::to('goods');
    }

	public function getDelete($id){
		$goods = Goods::find($id);
		
		if(!$goods == null){
			$goods->delete();
			
			return redirect('goods')->with('message', array('Data barang berhasil di hapus'));
		}
	}

	public function getChangeStatus($id){
		$goods = Goods::find($id);
		
		if(isset($goods)){
			if($goods->status == config('constants.ACTIVE')){
				$goods->status = config('constants.INACTIVE');
			} else {
				$goods->status = config('constants.ACTIVE');
			}
			
			$goods->save();
			$goods = Goods::paginate(config('constants.PAGINATION'));
			
			return redirect('goods')->with('message', array('Status berhasil di ubah'))
					->withInput($goods->toArray());
		}
	}
}
