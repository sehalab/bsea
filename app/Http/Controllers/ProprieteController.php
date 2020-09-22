<?php

namespace App\Http\Controllers;

use App\Propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->photo->getClientOriginalExtension();

        $request->photo->move(public_path('images'), $imageName);

        $propriete = Propriete::create([
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'genre' => $request->genre,
            'etatcivil' => $request->etatcivil,
            'numerocarte' => $request->numerocarte,
            'photo' => $imageName,
            'foyer_id' => $request->foyer_id,
        ]);

        return view('home')
            ->with('success', 'You have successfully upload image.')
            ->withSection("details")
            ->withPropriete($propriete->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propriete $propriete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        //
    }
}
