<?php

namespace App\Http\Controllers;

use App\Seller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
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
        $sellers = User::find(Auth::id())->Seller;
        return view('pages/profile/sellers/seller',compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/profile/sellers/newSeller');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'business_name'=> 'required',
            'office_add'=> 'required',
            'factory_add'=> 'required',
            'bin_vat_no'=> 'required',
            'erc_no'=> 'required',
            'ercDate'=> 'required',
            'irc_no'=> 'required',
            'irc_date'=> 'required',
            'company_phone_no'=> 'required',
            'company_fax_no'=> 'required',
            'company_email'=> 'required',
            'contact_person'=> 'required',
        ]);


        $seller = new Seller();

        $seller->business_name = $request->business_name;
        $seller->office_add = $request->office_add;
        $seller->factory_add = $request->factory_add;
        $seller->bin_vat_no = $request->bin_vat_no;
        $seller->erc_no = $request->erc_no;
        $seller->erc_date = $request->ercDate;
        $seller->irc_no = $request->irc_no;
        $seller->irc_date = $request->irc_date;
        $seller->phone_no = $request->company_phone_no;
        $seller->fax_no = $request->company_fax_no;
        $seller->email = $request->company_email;
        $seller->contact_person = $request->contact_person;

        $seller->user_id = Auth::id();
        $seller->save();

        return  redirect('seller');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::find($id);
        return view('pages/profile/sellers/editSeller',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'business_name'=> 'required',
            'office_add'=> 'required',
            'factory_add'=> 'required',
            'bin_vat_no'=> 'required',
            'erc_no'=> 'required',
            'ercDate'=> 'required',
            'irc_no'=> 'required',
            'irc_date'=> 'required',
            'company_phone_no'=> 'required',
            'company_fax_no'=> 'required',
            'company_email'=> 'required',
            'contact_person'=> 'required',
        ]);


        $seller = Seller::find($id);

        $seller->business_name = $request->business_name;
        $seller->office_add = $request->office_add;
        $seller->factory_add = $request->factory_add;
        $seller->bin_vat_no = $request->bin_vat_no;
        $seller->erc_no = $request->erc_no;
        $seller->erc_date = $request->ercDate;
        $seller->irc_no = $request->irc_no;
        $seller->irc_date = $request->irc_date;
        $seller->phone_no = $request->company_phone_no;
        $seller->fax_no = $request->company_fax_no;
        $seller->email = $request->company_email;
        $seller->contact_person = $request->contact_person;

        $seller->save();

        return  redirect('seller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        $seller->delete();
        return redirect('seller');
    }
}
