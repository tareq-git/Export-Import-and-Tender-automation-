<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
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
        $buyers = User::find(Auth::id())->Buyer;
        return view('pages/profile/buyers/buyer',compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/profile/buyers/newBuyer');
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
            'phone_no'=> 'required',
            'fax_no'=> 'required',
            'email'=> 'required',
            'contact_person'=> 'required',
        ]);

        $buyer = new Buyer();

        $buyer->business_name = $request->business_name;
        $buyer->office_add = $request->office_add;
        $buyer->factory_add = $request->factory_add;
        $buyer->phone_no = $request->phone_no;
        $buyer->fax_no = $request->fax_no;
        $buyer->email = $request->email;
        $buyer->contact_person = $request->contact_person;
        $buyer->user_id = Auth::id();
        $buyer->save();

        return redirect('buyer');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $buyer = Buyer::find($id);
        return view('pages/profile/buyers/editBuyer', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'business_name'=> 'required',
            'office_add'=> 'required',
            'factory_add'=> 'required',
            'phone_no'=> 'required',
            'fax_no'=> 'required',
            'email'=> 'required',
            'contact_person'=> 'required',
        ]);

        $buyer = Buyer::find($id);

        $buyer->business_name = $request->business_name;
        $buyer->office_add = $request->office_add;
        $buyer->factory_add = $request->factory_add;
        $buyer->phone_no = $request->phone_no;
        $buyer->fax_no = $request->fax_no;
        $buyer->email = $request->email;
        $buyer->contact_person = $request->contact_person;
        $buyer->save();

        return redirect('buyer');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect('buyer');
    }
}
