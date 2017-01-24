<?php namespace App\Models;

use Input;
use Illuminate\Database\Eloquent\Model;
use App\Emodel;
use Validator;

class Sale extends Emodel {
	
	protected $table = 'TR0010';

	public static function rules($data) {
		$error = array();
		
		$rules = array(
			'id_customer'	=> 'required',
			'discount'		=> 'numeric',
			'jatuh_tempo'	=> 'required|date|date_format:d-m-Y|',
		);

		$messages = array(
			'id_customer.required'	=> 'Customer harus di pilih',
			'discount.numeric'		=> 'Discount harus angka',
			'jatuh_tempo.required'	=> 'Jatuh tempo harus di isi',
			'jatuh_tempo.date'		=> 'Jatuh tempo harus tanggal',
		);
		
		$v = Validator::make($data, $rules, $messages);
		
		if($v->fails()) {
			$error = $v->errors()->all();
		}

		return $error;
	}

	public function doParams($object, $data) {
		$object->no_trx			= $this->getTrxNo();
		$object->jenis_trx		= config('constantstrx.SALE');
		$object->tgl_trx		= $data['tgl_trx'];
		$object->mst003_id		= $data['id_customer'];
		$object->subtotal		= $data['subtotal'];
		$object->discount		= $data['discount'];
		$object->total			= $data['total'];
		$object->jatuh_tempo	= $data['jatuh_tempo'];
		$object->deskripsi		= $data['deskripsi'];
		
		return $object;
	}
	
	private function getTrxNo(){
		$result = TourAlbum::where('mst001_id', '=', Auth::user()->id)->max('line_number');
		
		if(isset($result)) {
			return $result+=1;
		}

		return 1;
		
	}
}