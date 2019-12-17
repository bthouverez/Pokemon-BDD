<?php

namespace App\Http\Controllers;

use App\Dresseur;
use Illuminate\Http\Request;

class DresseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dresseurs = Dresseur::all();
        return view('dresseurs.index', compact('dresseurs'));
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
     * @param  \App\Dresseur  $dresseur
     * @return \Illuminate\Http\Response
     */
    public function show(Dresseur $dresseur)
    {
        return view('dresseurs.show', compact('dresseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dresseur  $dresseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Dresseur $dresseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dresseur  $dresseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dresseur $dresseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dresseur  $dresseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dresseur $dresseur)
    {
        //
    }
}
