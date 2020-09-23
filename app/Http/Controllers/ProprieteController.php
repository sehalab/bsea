<?php

namespace App\Http\Controllers;

use App\Propriete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propriete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function getPropriete($id){
        return view('propriete')->withFoyer($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required',
            'postnom' => 'required|max:255|min:4',
            'genre' => 'required|max:255|min:4',
            'etatcivil' => 'required|max:255|min:4',
            'numerocarte' => 'required|max:255|min:4',
        ], [
            'required' => 'Le :attribute est requis',
            'etatcivil.required' => "L' etat civil est requis",
            'between' => "la :attribute :input doit être entre :min - :max",
        ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

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

       return response()->json(['success' => 'Record is successfully added', 'foyer' => $propriete->id]);

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
