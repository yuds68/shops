<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('main.main-page');
});

Route::controller('user', 'Master\UserController');
Route::controller('customer', 'Master\CustomerController');
Route::controller('goods', 'Master\GoodsController');
Route::controller('supplier', 'Master\SupplierController');

Route::controller('adjustment-minus', 'Transaction\AdjustmentMinusController');
Route::controller('adjustment-plus', 'Transaction\AdjustmentPlusController');
Route::controller('debt-payment', 'Transaction\DebtPaymentController');
Route::controller('goods-delivery', 'Transaction\GoodsDeliveryController');
Route::controller('goods-receipt', 'Transaction\GoodsReceiptController');
Route::controller('purchase', 'Transaction\PurchaseController');
Route::controller('receivable-payment', 'Transaction\ReceivablePaymentController');
Route::controller('sale', 'Transaction\SaleController');
Route::controller('stock-opname', 'Transaction\StockOpnameController');

Route::controller('debt-report', 'Report\DebtReportController');
Route::controller('purchase-report', 'Report\PurchaseReportController');
Route::controller('receivable-report', 'Report\ReceivableReportController');
Route::controller('sale-report', 'Report\SaleReportController');

Route::get('password', function(){
	echo Hash::make('yuds12345');
});