<?php

namespace App\Http\Controllers;

use App\Details;
use App\Proprio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details');
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
        return view('details')->withPropriete($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proprio = null;
        if (isset($request->nom, $request->prenom, $request->telephone, $request->adresse)) {
            $validator = Validator::make($request->all(), [
                'nom' => 'required',
                'postnom' => 'required|max:255|min:4',
                'adresse' => 'required|max:255|min:10',
                'statut' => 'required|max:255|min:4',
                'duree' => 'required|max:255|min:1',
                ], [
                    'required' => 'Le :attribute est requis',
                    'adresse.required' => "L' :attribute est requise",
                    'duree.required' => "La :attribute est requise",
                    'between' => "la :attribute :input doit être entre :min - :max",
                ]
            );

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }

            $proprio = Proprio::create([
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "telephone" => $request->telephone,
                "adresse" => $request->adresse,
            ]);

            Details::create([
                "statut" => $request->statut,
                "duree" => $request->duree,
                "propriete_id" => $request->propriete_id,
                "proprio_id" => $proprio->id,
            ]);

        } else {
            $validator = Validator::make($request->all(), [
                'statut' => 'required|max:255|min:4',
                'duree' => 'required|max:255|min:1',
                ], [
                    'required' => 'Le :attribute est requis',
                    'adresse.required' => "L' :attribute est requise",
                    'duree.required' => "La :attribute est requise",
                    'between' => "la :attribute :input doit être entre :min - :max",
                ]
            );

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }

            Details::create([
                "statut" => $request->statut,
                "duree" => $request->duree,
                "propriete_id" => $request->propriete_id,
                "proprio_id" => 0,
            ]);
        }

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->propriete_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit(Details $details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Details $details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Details $details)
    {
        //
    }
}
