<?php namespace App\Models;

use Input;
use Illuminate\Database\Eloquent\Model;
use App\Emodel;
use Validator;

class Supplier extends Emodel {
	
	protected $table = 'MST004';

	public static function rules($data) {
		$error = array();
		
		$rules = array(
			'kode_supplier'	=> 'required',
			'nama_supplier'	=> 'required',
			'alamat'		=> 'required',
			'no_telp'		=> 'required',
		);

		$messages = array(
			'kode_supplier.required'	=> 'Kode Supplier harus di isi',
			'nama_supplier.required'	=> 'Nama Supplier harus di isi',
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
		$object->kode_supplier	= $data['kode_supplier'];
		$object->nama_supplier	= $data['nama_supplier'];
		$object->alamat			= $data['alamat'];
		$object->no_telp		= $data['no_telp'];
		$object->status			= $data['status'];
		
		return $object;
	}
}