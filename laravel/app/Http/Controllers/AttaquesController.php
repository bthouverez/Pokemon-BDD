<?php

namespace App\Http\Controllers;

use App\Attaque;
use App\Type;
use Illuminate\Http\Request;

class AttaquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attaques = Attaque::all();
        return view('attaques.index', compact('attaques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('attaques.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attaque  $attaque
     * @return \Illuminate\Http\Response
     */
    public function show(Attaque $attaque)
    {
        return view('attaques.show', compact('attaque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attaque  $attaque
     * @return \Illuminate\Http\Response
     */
    public function edit(Attaque $attaque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attaque  $attaque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attaque $attaque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attaque  $attaque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attaque $attaque)
    {
        //
    }
}
