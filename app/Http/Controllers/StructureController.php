<?php

namespace App\Http\Controllers;

use App\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('structure');
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

    public function getPropriete($id){
        return view('structure')->withPropriete($id);
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
                'materiaux' => 'required|max:255|min:4',
                'longueur' => 'required|alpha_num|max:255|min:1',
                'largeur' => 'required|alpha_num|max:255|min:1',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'required' => 'La :attribute est requise',
                'numero.required' => 'Le numero est requis',
                'materiaux.required' => 'Les :attribute du village est requise',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]   
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        $imageName = time() . '.' . request()->photo->getClientOriginalExtension();

        $request->photo->move(public_path('images'), $imageName);

        Structure::create([
            "photo" => $imageName,
            "longueur" => $request->longueur,
            "largeur" => $request->largeur,
            "materiaux" => $request->materiaux,
            "foyer_id" => $request->propriete_id,
        ]);

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->propriete_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        return $structure;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $structure)
    {
        return $structure;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $structure)
    {
        $structure->update([
            "longueur" => $request->champs[1],
            "largeur" => $request->champs[2],
            "materiaux" => $request->champs[3],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $structure)
    {
        //
    }
}
