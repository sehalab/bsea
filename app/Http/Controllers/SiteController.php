<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
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
            'description' => 'required|max:255|min:4',
            'local_N' => 'required|alpha_num|max:255|min:4',
            'local_E' => 'required|alpha_num|max:255|min:4',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
            [
                'required' => 'La :attribute est requise',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 500);
        }

        $imageName = time() . '.' . request()->photo->getClientOriginalExtension();

        $request->photo->move(public_path('images'), $imageName);

        Site::create([
            "refphoto" => $imageName,
            "local_N" => $request->local_N,
            "local_E" => $request->local_E,
            "description" => $request->description,
            "etat" => ($request->etat) ? true : false,
            "foyer_id" => $request->foyer_id,
        ]);

        return response()->json(['success' => 'Record is successfully added', 'foyer' => $request->foyer_id]);
    }

    public function getPropriete($id)
    {
        return view('sites')->withPropriete($id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $site->update([
            "description" => $request->champs[1],
            "etat" => $request->champs[2],
            "local_E" => $request->champs[3],
            "local_N" => $request->champs[4],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }
}
