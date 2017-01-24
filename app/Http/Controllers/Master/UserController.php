<?php namespace App\Http\Controllers\Master;

use Input, Session, Redirect, Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

	public function getIndex(){
		$user = User::paginate(config('constants.PAGINATION'));

		return view('master.user.user')->with('user', $user);
	}

	public function getInput(){
		return view('master.user.user-input');
	}

	public function postSave(Request $request){
		$data = $request->all();
		$user = new User();
		$errorBag = $user->rules($data);

		if(count($errorBag) > 0){

			Session::flash('error', $errorBag);
			return redirect('user');
		} else {

			if(isset($data['id'])){
				$user = User::find($data['id']);
				
				if($user == null){
					$user = new User();
				}
			}
			
			$user->doParams($user, $data);
			$user->save();
			
			return redirect('user')->with('message', array('Data user berhasil di simpan'))
					->withInput($user->toArray());
		}
	}

	public function postLoadData(){
    	$this->layout = null;
    	$passvalue = Input::all();

        if(isset($passvalue['id'])){
            $user = User::find($passvalue['id']);

            if($user == null){
            	Session::flash('error', array('pass value dengan id ' . $passvalue['ID'] . ' tidak ditemukan'));
            	return Redirect::to('user');
            }

            return Redirect::to('user/input')->withInput($user->toArray());
        }

        Session::flash('error', array('Nothing to load'));
    	return Redirect::to('user');
    }

	public function getDelete($id){
		$user = User::find($id);
		
		if(!$user == null){
			$user->delete();
			
			return redirect('user')->with('message', array('Data user berhasil di hapus'));
		}
	}

	public function getChangeStatus($id){
		$user = User::find($id);
		
		if(isset($user)){
			if($user->status == config('constants.ACTIVE')){
				$user->status = config('constants.INACTIVE');
			} else {
				$user->status = config('constants.ACTIVE');
			}
			
			$user->save();
			$user = User::paginate(config('constants.PAGINATION'));
			
			return redirect('user')->with('message', array('Status berhasil di ubah'))
					->withInput($user->toArray());
		}
	}
}
