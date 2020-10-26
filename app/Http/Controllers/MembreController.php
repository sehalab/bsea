<?php

namespace App\Http\Controllers;

use App\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('membre');
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

    public function getPropriete($id)
    {
        return view('membre')->withPropriete($id);
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
            'nomcomplet' => 'required|max:255|min:4',
            'relation' => 'required|max:255|min:4',
            'genre' => 'required|max:255|min:4',
            'age' => 'required|alpha_num|max:255|min:1',
            'niveauetudes' => 'required|max:255|min:4',
            'occupation' => 'required|max:255|min:4',
            'vulnerabilite' => 'required|max:255|min:4',
            'ecole' => 'required|max:255|min:4',
            'etatcivil' => 'required|max:255|min:4',
        ],
            [
                'required' => 'La :attribute est requise',
                'relation.required' => 'La :attribute est requise',
                'vulnerabilite.required' => 'Les :attribute  est requise',
                'ecole.required' => "L' :attribute  est requise",
                'etatcivil.required' => "L' :attribute  est requis",
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        Membre::create($request->except("_token"));

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->foyer_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
        $membre->update([
            'nomcomplet' => $request->champs[1],
            'relation' => $request->champs[2],
            'genre' => $request->champs[3],
            'age' => $request->champs[4],
            'niveauetudes' => $request->champs[5],
            'ecole' => $request->champs[6],
            'vulnerabilite' => $request->champs[7],
            'etatcivil' => $request->champs[8],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }
}
