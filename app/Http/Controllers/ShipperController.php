<?php

namespace App\Http\Controllers;

use App\Shipper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShipperController extends Controller
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
        $shippers = User::find(Auth::id())->shipper;
        return view('pages/profile/shippers/shipper',compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/profile/shippers/newShipper');
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
            'company_contact_person'=> 'required',
        ]);


        $shipper = new Shipper();

        $shipper->business_name = $request->business_name;
        $shipper->office_add = $request->office_add;
        $shipper->factory_add = $request->factory_add;
        $shipper->bin_vat_no = $request->bin_vat_no;
        $shipper->erc_no = $request->erc_no;
        $shipper->erc_date = $request->ercDate;
        $shipper->irc_no = $request->irc_no;
        $shipper->irc_date = $request->irc_date;
        $shipper->phone_no = $request->company_phone_no;
        $shipper->fax_no = $request->company_fax_no;
        $shipper->email = $request->company_email;
        $shipper->contact_person = $request->company_contact_person;
        $shipper->user_id = Auth::id();
        $shipper->save();

        return  redirect('shipper');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function show(Shipper $shipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipper = Shipper::find($id);
        return view('pages/profile/shippers/editShipper', compact('shipper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipper  $shipper
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
            'company_contact_person'=> 'required',
        ]);


        $shipper = Shipper::find($id);

        $shipper->business_name = $request->business_name;
        $shipper->office_add = $request->office_add;
        $shipper->factory_add = $request->factory_add;
        $shipper->bin_vat_no = $request->bin_vat_no;
        $shipper->erc_no = $request->erc_no;
        $shipper->erc_date = $request->ercDate;
        $shipper->irc_no = $request->irc_no;
        $shipper->irc_date = $request->irc_date;
        $shipper->phone_no = $request->company_phone_no;
        $shipper->fax_no = $request->company_fax_no;
        $shipper->email = $request->company_email;
        $shipper->contact_person = $request->company_contact_person;

        $shipper->save();

        return  redirect('shipper');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipper $shipper)
    {
        $shipper->delete();
        return redirect('shipper');
    }
}
