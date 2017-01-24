<?php namespace App\Models;

use Input;
use Illuminate\Database\Eloquent\Model;
use App\Emodel;
use Validator;

class Goods extends Emodel {
	
	protected $table = 'MST002';

	public static function rules($data) {
		$error = array();
		
		$rules = array(
			'kode_barang'	=> 'required',
			'jenis_barang'	=> 'required',
			'panjang'		=> 'required',
			'warna'			=> 'required',
		);

		$messages = array(
			'kode_barang.required'	=> 'Kode Barang harus di isi',
			'jenis_barang.required'	=> 'Jenis Barang harus di isi',
			'panjang.required'		=> 'Panjang harus di isi',
			'warna.required'		=> 'Warna harus di isi',
		);
		
		$v = Validator::make($data, $rules, $messages);
		
		if($v->fails()) {
			$error = $v->errors()->all();
		}

		return $error;
	}

	public function doParams($object, $data) {
		$object->kode_barang	= $data['kode_barang'];
		$object->jenis_barang	= $data['jenis_barang'];
		$object->panjang		= $data['panjang'];
		$object->warna			= $data['warna'];
		$object->status			= $data['status'];
		
		return $object;
	}
}