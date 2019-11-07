<?php

namespace App\Http\Controllers;

use App\Cnf;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CnfController extends Controller
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
        $cnfs = User::find(Auth::id())->Cnf;
        return view('pages/cnfs/cnf',compact('cnfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/cnfs/newCnf');
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
            'address'=> 'required',
            'contact_person'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'mobile'=> 'required',
            'working_port'=> 'required',
            'reg_no'=> 'required | integer',
        ]);

        $cnf = new Cnf();

        $cnf->name = $request->name;
        $cnf->address = $request->address;
        $cnf->contact_person = $request->contact_person;
        $cnf->email = $request->email;
        $cnf->phone = $request->phone;
        $cnf->mobile = $request->mobile;
        $cnf->working_port = $request->working_port;
        $cnf->reg_no = $request->reg_no;

        $cnf->user_id = Auth::id();

        $cnf->save();

        return redirect('cnf');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cnf  $cnf
     * @return \Illuminate\Http\Response
     */
    public function show(Cnf $cnf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cnf  $cnf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cnf = Cnf::find($id);

        return view('pages/cnfs/editCnf',compact('cnf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cnf  $cnf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'contact_person'=> 'required',
            'email'=> 'required',
            'phone'=> 'required |',
            'mobile'=> 'required',
            'working_port'=> 'required',
            'reg_no'=> 'required | integer',
        ]);

        $cnf = Cnf::find($id);

        $cnf->name = $request->name;
        $cnf->address = $request->address;
        $cnf->contact_person = $request->contact_person;
        $cnf->email = $request->email;
        $cnf->phone = $request->phone;
        $cnf->mobile = $request->mobile;
        $cnf->working_port = $request->working_port;
        $cnf->reg_no = $request->reg_no;

        $cnf->save();

        return redirect('cnf');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cnf  $cnf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cnf $cnf)
    {
        $cnf->delete();
        return redirect('cnf');
    }
}
