<?php

namespace App\Http\Controllers;

use App\SellerBank;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerBankController extends Controller
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
        $sellerBanks = User::find(Auth::id())->SellerBank;
        return view('pages/banks/sellerBanks/sellerBank',compact('sellerBanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/banks/sellerBanks/newSellerBank');
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
            'name'=> 'required',
            'branch'=> 'required',
            'acc_name'=> 'required',
            'acc_num'=> 'required',
            'swift_code'=> 'required',
            'branch_add'=> 'required',
            'bin_no'=> 'required',
            'currency'=> 'required',
            'email'=> 'required',
            'phone_no'=> 'required',
            'rm_name'=> 'required',
            'rm_mobile_num'=> 'required',
        ]);



        $sellerRequest = new SellerBank();

        $sellerRequest->name = $request->name;
        $sellerRequest->branch = $request->branch;
        $sellerRequest->acc_name = $request->acc_name;
        $sellerRequest->acc_num = $request->acc_num;
        $sellerRequest->swift_code = $request->swift_code;
        $sellerRequest->branch_add = $request->branch_add;
        $sellerRequest->bin_num = $request->bin_no;
        $sellerRequest->currency = $request->currency;
        $sellerRequest->email = $request->email;
        $sellerRequest->phone_no = $request->phone_no;
        $sellerRequest->rm_name = $request->rm_name;
        $sellerRequest->rm_mobile_num = $request->rm_mobile_num;

        $sellerRequest->user_id = Auth::id();

        $sellerRequest->save();

        return redirect('sellerBank');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function show(SellerBank $sellerBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sellerBanks = SellerBank::find($id);
        return view('pages/banks/sellerBanks/editSellerBank', compact('sellerBanks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name'=> 'required',
            'branch'=> 'required',
            'acc_name'=> 'required',
            'acc_num'=> 'required',
            'swift_code'=> 'required',
            'branch_add'=> 'required',
            'bin_no'=> 'required',
            'currency'=> 'required',
            'email'=> 'required',
            'phone_no'=> 'required',
            'rm_name'=> 'required',
            'rm_mobile_num'=> 'required',
        ]);


        $sellerRequest = SellerBank::find($id);

        $sellerRequest->name = $request->name;
        $sellerRequest->branch = $request->branch;
        $sellerRequest->acc_name = $request->acc_name;
        $sellerRequest->acc_num = $request->acc_num;
        $sellerRequest->swift_code = $request->swift_code;
        $sellerRequest->branch_add = $request->branch_add;
        $sellerRequest->bin_num = $request->bin_no;
        $sellerRequest->currency = $request->currency;
        $sellerRequest->email = $request->email;
        $sellerRequest->phone_no = $request->phone_no;
        $sellerRequest->rm_name = $request->rm_name;
        $sellerRequest->rm_mobile_num = $request->rm_mobile_num;

        $sellerRequest->save();

        return redirect('sellerBank');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SellerBank  $sellerBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerBank $sellerBank)
    {
        $sellerBank->delete();
        return redirect('sellerBank');
    }
}
