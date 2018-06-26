<?php

namespace App\Http\Controllers;

use App\Siv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SivsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         if(Auth::check()){

        $sivs = Siv::all();

        return view('issues.index',['sivs'=>$sivs]);
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
         return view('issues.create');
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
     * @param  \App\Siv  $siv
     * @return \Illuminate\Http\Response
     */
    public function show(Siv $siv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siv  $siv
     * @return \Illuminate\Http\Response
     */
    public function edit(Siv $siv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siv  $siv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siv $siv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siv  $siv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siv $siv)
    {
        //
    }
}
