<?php

namespace App\Http\Controllers;

use App\Betails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BetailsController extends Controller
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
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255|min:4',
        ],
            [
                'required' => 'La :attribute est requise',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        Betails::create([
            "nom" => $request->nom,
            "foyer_id" => $request->foyer_id,
        ]);

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->foyer_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Betails  $betails
     * @return \Illuminate\Http\Response
     */
    public function show(Betails $betails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Betails  $betails
     * @return \Illuminate\Http\Response
     */
    public function edit(Betails $betails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Betails  $betails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Betails $betails)
    {
        $betails->update([
            "nom" => $request->champs[1],
        ]);
        return "ok";

    }

    public function getPropriete($id)
    {
        return view('betails')->withPropriete($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Betails  $betails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Betails $betails)
    {
        //
    }
}
