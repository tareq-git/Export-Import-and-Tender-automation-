<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('seller','SellerController');
Route::resource('buyer','BuyerController');
Route::resource('shipper','ShipperController');
Route::resource('buyerBank','BuyerBankController');
Route::resource('cnf','CnfController');
Route::resource('product','ProductController');
Route::resource('sellerBank','SellerBankController');
Route::resource('catalogue','CatalogueController');
Route::get('catalogue/print/{id}', 'CatalogueController@print')->name('catalogue.print');
Route::get('catalogue/mail/{id}', 'CatalogueController@send_mail')->name('catalogue.mail');
Route::resource('proforma','ProformaController');


Route::resource('quotation','QuotationController');
Route::resource('certificate','CertificateController');
Route::resource('commercialInvoice','CommercialInvoiceController');
Route::resource('orderConfirmation','OrderConfirmationController');
Route::resource('packingListBuyer','PackingListBuyerController');
Route::resource('purchaseOrder','PurchaseOrderController');


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});