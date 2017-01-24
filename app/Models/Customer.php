<?php namespace App\Models;

use Input;
use Illuminate\Database\Eloquent\Model;
use App\Emodel;
use Validator;

class Customer extends Emodel {
	
	protected $table = 'MST003';

	public static function rules($data) {
		$error = array();
		
		$rules = array(
			'kode_customer'	=> 'required',
			'nama_customer'	=> 'required',
			'alamat'		=> 'required',
			'no_telp'		=> 'required',
		);

		$messages = array(
			'kode_customer.required'	=> 'Kode Customer harus di isi',
			'nama_customer.required'	=> 'Nama Customer harus di isi',
			'alamat.required'			=> 'Alamat harus di isi',
			'no_telp.required'			=> 'No Telp harus di isi',
		);
		
		$v = Validator::make($data, $rules, $messages);
		
		if($v->fails()) {
			$error = $v->errors()->all();
		}

		return $error;
	}

	public function doParams($object, $data) {
		$object->kode_customer	= $data['kode_customer'];
		$object->nama_customer	= $data['nama_customer'];
		$object->alamat			= $data['alamat'];
		$object->no_telp		= $data['no_telp'];
		$object->status			= $data['status'];
		
		return $object;
	}
}