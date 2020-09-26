<?php

namespace App\Http\Controllers;

use App\Tombe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TombeController extends Controller
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

    public function getPropriete($id)
    {
        return view('tombes')->withPropriete($id);
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
            'lienparente' => 'required|max:255|min:4',
            'local_N' => 'required|alpha_num|max:255|min:4',
            'local_E' => 'required|alpha_num|max:255|min:4',
            'annee' => 'required|alpha_num|max:255|min:4',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
            [
                'required' => 'La :attribute est requise',
                'annee.required' => "L' :attribute est requis",
                'lienparente.required' => 'Le champs lien de parenté est requis',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        $imageName = time() . '.' . request()->photo->getClientOriginalExtension();

        $request->photo->move(public_path('images'), $imageName);

        Tombe::create([
            "refphoto" => $imageName,
            "heure" => Carbon::now(),
            "annee" => $request->annee,
            "local_N" => $request->local_N,
            "local_E" => $request->local_E,
            "lienparente" => $request->lienparente,
            "foyer_id" => $request->foyer_id,
        ]);

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->foyer_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tombe  $tombe
     * @return \Illuminate\Http\Response
     */
    public function show(Tombe $tombe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tombe  $tombe
     * @return \Illuminate\Http\Response
     */
    public function edit(Tombe $tombe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tombe  $tombe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tombe $tombe)
    {
        $tombe->update([
            "lienparente" => $request->champs[1],
            "heure" => $request->champs[2],
            "annee" => $request->champs[3],
            "local_E" => $request->champs[4],
            "local_N" => $request->champs[5],
        ]);
        return "ok";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tombe  $tombe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tombe $tombe)
    {
        //
    }
}
