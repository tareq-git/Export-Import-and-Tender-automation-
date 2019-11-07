<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\BuyerBank;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerBankController extends Controller
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

        $buyerBanks = User::find(Auth::id())->BuyerBank;
        return view('pages/banks/buyerBanks/buyerBank',compact('buyerBanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/banks/buyerBanks/newBuyerBank');
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
            'swift_code'=> 'required',
            'branch_add'=> 'required',
        ]);

        $buyerBank = new BuyerBank();

        $buyerBank->name = $request->name;
        $buyerBank->swift_code = $request->swift_code;
        $buyerBank->branch_add = $request->branch_add;
        $buyerBank->other_info = $request->other_info;

        $buyerBank->user_id = Auth::id();
        $buyerBank->save();

        return redirect('buyerBank');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function show(BuyerBank $buyerBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buyerBanks = BuyerBank::find($id);

        return view('pages/banks/buyerBanks/editBuyerBank',compact('buyerBanks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'swift_code'=> 'required',
            'branch_add'=> 'required',
        ]);

        $buyerBank = BuyerBank::find($id);

        $buyerBank->name = $request->name;
        $buyerBank->swift_code = $request->swift_code;
        $buyerBank->branch_add = $request->branch_add;
        $buyerBank->other_info = $request->other_info;

        $buyerBank->save();

        return redirect('buyerBank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyerBank  $buyerBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyerBank $buyerBank)
    {


        $buyerBank->delete();
        return redirect('buyerBank');
    }
}
