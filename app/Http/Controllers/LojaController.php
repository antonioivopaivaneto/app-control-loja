<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use App\Http\Requests\StoreLojaRequest;
use App\Http\Requests\UpdateLojaRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()){
            $lojas = Loja::all();

        $user_loja = User::find(Auth::user()->id)->loja()->get();


        return view('app.loja',["lojas" => $lojas,'user_loja' => $user_loja]);

        }else{
            return redirect()->route('/');

        }

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
     * @param  \App\Http\Requests\StoreLojaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLojaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function edit(Loja $loja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLojaRequest  $request
     * @param  \App\Models\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLojaRequest $request, Loja $loja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loja $loja)
    {
        //
    }

    public function ajuda(){
        return view('app.ajuda');
    }
}
