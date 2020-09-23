<?php

namespace App\Http\Controllers;

use App\Details;
use App\Proprio;
use Illuminate\Http\Request;

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
            Details::create([
                "statut" => $request->statut,
                "duree" => $request->duree,
                "propriete_id" => $request->propriete_id,
                "proprio_id" => 0,
            ]);
        }

        return view('structure')
            ->with('success', 'You have successfully upload image.')
            ->withPropriete($request->propriete_id);

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
