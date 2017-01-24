<?php namespace App\Models;

use Input;
use Illuminate\Database\Eloquent\Model;
use App\Emodel;
use Validator;

class SaleDetail extends Emodel {
	
	protected $table = 'TR0011';

	public static function rules($data) {
		$error = array();
		
		$rules = array(
			'qty'		=> 'required|numeric',
			'harga'		=> 'required|numeric',
		);

		$messages = array(
			'qty.required'		=> 'Qty harus di isi',
			'qty.numeric'		=> 'Qty harus angka',
			'harga.required'	=> 'Harga harus di isi',
			'harga.numeric'		=> 'Harga harus angka',
		);
		
		$v = Validator::make($data, $rules, $messages);
		
		if($v->fails()) {
			$error = $v->errors()->all();
		}

		return $error;
	}

	public function doParams($object, $data) {
		$object->tr0010_id	= $data['id_penjualan'];
		$object->mst002_id	= $data['id_barang'];
		$object->qty		= $data['qty'];
		$object->harga		= $data['harga'];
		$object->subtotal	= $data['subtotal'];
		
		return $object;
	}
}