<?php

namespace App\Http\Controllers;

use App\Foyer;
use App\Proprio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;


class FoyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foyers = Foyer::all();
        return view('foyer')->withFoyers($foyers);
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
        if (isset($request->nom, $request->prenom, $request->telephone, $request->adresse)) {
            $validator = Validator::make(
                $request->all(),
                [
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'numero' => 'required',
                    'nom_village' => 'required|max:255|min:4',
                    'latitude' => 'required|alpha_num|max:255|min:4',
                    'longitude' => 'required|alpha_num|max:255|min:4',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'nom' => 'required',
                    'postnom' => 'required|max:255|min:4',
                    'genre' => 'required|max:255|min:4',
                    'etatcivil' => 'required|max:255|min:4',
                    'numerocarte' => 'required|max:255|min:4',
                    'nom_prop' => 'required',
                    'prenom' => 'required|max:255|min:4',
                    'adresse' => 'required|max:255|min:10',
                    'telephone' => 'required|max:255|min:10',
                    'statut' => 'required|max:255|min:4',
                    'duree' => 'required|max:255|min:1',
                ],
                [
                    'required' => 'Le :attribute est requis',
                    'latitude.required' => 'La :attribute est requise',
                    'longitude.required' => 'La :attribute est requise',
                    'photo.required' => 'La :attribute est requise',
                    'between' => "la :attribute :input doit être entre :min - :max",
                    'etatcivil.required' => "L' etat civil est requis",
                    'between' => "la :attribute :input doit être entre :min - :max",
                    'adresse.required' => "L' :attribute est requise",
                    'duree.required' => "La :attribute est requise",
                ]
            );

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }

            $pictureName = 'PIC_' . time() . '.' . request()->photo->getClientOriginalExtension();
            $imageName = 'IMG_' . time() . '.' . request()->image->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $pictureName);
            $request->image->move(public_path('images'), $imageName);

            $proprio = Proprio::create([
                "nom" => $request->nom_prop,
                "prenom" => $request->prenom,
                "telephone" => $request->telephone,
                "adresse" => $request->adresse,
            ]);

            $foyer = Foyer::create([
                'numero' => $request->numero,
                'nom_village' => $request->nom_village,
                'photo' => $pictureName,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'user_id' => Auth::user()->id,
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'genre' => $request->genre,
                'etatcivil' => $request->etatcivil,
                'numerocarte' => $request->numerocarte,
                'photo_propriete' => $imageName,
                'statut' => $request->statut,
                'duree' => $request->duree,
                'proprio_id' => $proprio->id,
            ]);
            return response()->json(['success' => 'Record is successfully added', 'foyer' => $foyer->id]);
        } else {

            $pictureName = 'PIC_' . time() . '.' . request()->photo->getClientOriginalExtension();
            $imageName = 'IMG_' . time() . '.' . request()->image->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $pictureName);
            $request->image->move(public_path('images'), $imageName);

            $validator = Validator::make(
                $request->all(),
                [
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'numero' => 'required',
                    'nom_village' => 'required|max:255|min:4',
                    'latitude' => 'required|alpha_num|max:255|min:4',
                    'longitude' => 'required|alpha_num|max:255|min:4',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'nom' => 'required',
                    'postnom' => 'required|max:255|min:4',
                    'genre' => 'required|max:255|min:4',
                    'etatcivil' => 'required|max:255|min:4',
                    'numerocarte' => 'required|max:255|min:4',
                    'statut' => 'required|max:255|min:4',
                    'duree' => 'required|max:255|min:1',
                ],
                [
                    'required' => 'Le :attribute est requis',
                    'latitude.required' => 'La :attribute est requise',
                    'longitude.required' => 'La :attribute est requise',
                    'photo.required' => 'La :attribute est requise',
                    'between' => "la :attribute :input doit être entre :min - :max",
                    'etatcivil.required' => "L' etat civil est requis",
                    'between' => "la :attribute :input doit être entre :min - :max",
                    'duree.required' => "La :attribute est requise",
                ]
            );

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 500);
            }

            $foyer = Foyer::create([
                'numero' => $request->numero,
                'nom_village' => $request->nom_village,
                'photo' => $pictureName,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'user_id' => Auth::user()->id,
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'genre' => $request->genre,
                'etatcivil' => $request->etatcivil,
                'numerocarte' => $request->numerocarte,
                'photo_propriete' => $imageName,
                'statut' => $request->statut,
                'duree' => $request->duree,
                'proprio_id' => 0,
            ]);
            return response()->json(['success' => 'Record is successfully added', 'foyer' => $foyer->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foyer $foyer)
    {
        return view('singlefoyer')->withFoyer($foyer);
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

    public function createPDF($id)
    {
        $foyer = Foyer::find($id);
        view()->share('foyer', $foyer);

        $pdf = PDF::loadView('welcome', $foyer);
        //return $foyer;
        return $pdf->download('pdf_file.pdf');

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
