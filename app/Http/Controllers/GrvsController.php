<?php

namespace App\Http\Controllers;

use App\Grv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class GrvsController extends Controller
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


        $grvs=Grv::all();

        return view('goods.index',['grvs'=> $grvs]);
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
    if(Auth::check()){

        return view('goods.create');

      }
        return view('auth.register');
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
        if(Auth::check()){
            $grvs = Grv::create([
            'name' => $request->input('name'),
            'supplier' => $request->input('supplier'),
            'delevery_date' => $request->input('delevery_date'),
            'expire' => $request->input('expire'),
            'officer' => $request->input('officer'),
            'quantity' => $request->input('quantity'),
            'user_id'=> Auth::user()->id

            ]);
        

            if($grvs){

                return redirect()->route('goods.index');
            }

        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grv  $grv
     * @return \Illuminate\Http\Response
     */
    public function show(Grv $grv)

    {
        //
     
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grv  $grv
     * @return \Illuminate\Http\Response
     */
    public function edit(Grv $grv)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grv  $grv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grv $grv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grv  $grv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grv $grv)
    {
        //
    }
}
