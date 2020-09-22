<?php

namespace App\Http\Controllers;

use App\Foyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoyerController extends Controller
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
        $this->validate($request, [
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'numero' => 'required',
                'nom_village' => 'required|max:255|min:4',
                'latitude' => 'required|alpha_num|max:255|min:4',
                'longitude' => 'required|alpha_num|max:255|min:4',
            ],[
                'required' => 'La :attribute est requise',
                'numero.required' => 'Le numero est requis',
                'nom_village.required' => 'Le nom du village est requise',
                'between' => "la :attribute :input doit être entre :min - :max",
            ]
        );


        $imageName = time().'.'.request()->photo->getClientOriginalExtension();

        $request->photo->move(public_path('images'), $imageName);


        $foyer = Foyer::create([
            'numero' => $request->numero,
            'nom_village' => $request->nom_village,
            'photo' => $imageName,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'user_id' => Auth::user()->id,
        ]);

        return view('home')
            ->with('success','You have successfully upload image.')
            ->withSection("propriete")
            ->withFoyer($foyer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
