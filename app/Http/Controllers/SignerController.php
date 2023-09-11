<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\signer;
use App\Http\Requests\StoresignerRequest;
use App\Http\Requests\UpdatesignerRequest;

class SignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoresignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresignerRequest $request)
    {
        //
        signer::create($request->all());
        return redirect('login');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\signer  $signer
     * @return \Illuminate\Http\Response
     */
    public function show(signer $signer)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signer  $signer
     * @return \Illuminate\Http\Response
     */
    public function edit(signer $signer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesignerRequest  $request
     * @param  \App\Models\signer  $signer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesignerRequest $request, signer $signer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signer  $signer
     * @return \Illuminate\Http\Response
     */
    public function destroy(signer $signer)
    {
        //
    }

    public function sign(Request $request)
    {
        $signer=signer::where(['email'=>$request->email])->first();

        if (!$signer  || Hash::check($request->password,$signer->password)) {
            return (" user email or passowrd dones't match");
        }
        else {
            $request->session()->put('signer',$signer);
            return redirect('/');
        }
    }

    public function adminlogin(Request $request)
    {

        if ($request->email=="Admin@gmail.com"  || Hash::check($request->password,"123123"))
        {
            return redirect('/adminpage');
        }
        else {
            return (" admin email or passowrd dones't match");
            
        }
    }
}
