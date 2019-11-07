<?php

namespace App\Http\Controllers;

use App\CommercialInvoice;
use Illuminate\Http\Request;

class CommercialInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('pages/commercialInvoices/commercialInvoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommercialInvoice  $commercialInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(CommercialInvoice $commercialInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommercialInvoice  $commercialInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(CommercialInvoice $commercialInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommercialInvoice  $commercialInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommercialInvoice $commercialInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommercialInvoice  $commercialInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommercialInvoice $commercialInvoice)
    {
        //
    }
}
