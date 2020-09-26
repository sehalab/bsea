<?php

namespace App\Http\Controllers;

use App\Arbre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArbreController extends Controller
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

    public function getPropriete($id)
    {
        return view('arbres')->withPropriete($id);
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
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255|min:4',
            'usage' => 'required|max:255|min:4',
        ],
            [
                'required' => 'La :attribute est requise',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        Arbre::create([
            "nom" => $request->nom,
            "usage" => $request->usage,
            "foyer_id" => $request->foyer_id,
        ]);

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->foyer_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Arbre  $arbre
     * @return \Illuminate\Http\Response
     */
    public function show(Arbre $arbre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Arbre  $arbre
     * @return \Illuminate\Http\Response
     */
    public function edit(Arbre $arbre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Arbre  $arbre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arbre $arbre)
    {
        $arbre->update([
            "usage" => $request->champs[1],
            "nom" => $request->champs[2],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Arbre  $arbre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arbre $arbre)
    {
        //
    }
}
