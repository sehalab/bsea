@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Material form subscription -->
            @isset($success)
                <div class="alert alert-success" role="alert">
                    {{ $success }}
                </div>
            @endisset
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Foyer</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form id="form" method="POST" action="{{ route('foyer.store') }}" enctype="multipart/form-data" style="color: #757575;">
                        @csrf
                        <div class="md-form mt-3">
                            <input type="number" name="numero" id="numero" class="form-control champ">
                            <label for="numero">Code</label>
                            <div class="invalid-feedback"></div>
                        </div>
                        <!-- E-mai -->
                        <div class="md-form">
                            <input type="text" name="nom_village" id="nom_village" class="form-control champ">
                            <label for="nom_village">Nom village</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="latitude" id="latitude" class="form-control champ">
                            <label for="latitude">Latitude</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="longitude" id="longitude" class="form-control champ">
                            <label for="longitude">Longitude</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-outline-info waves-effect btn-sm float-left">
                                    <span>Photo</span>
                                    <input type="file" name="photo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate champ" type="text" placeholder="photo">
                                </div>
                            </div>
                            
                            <div class="valid-feedback"></div>
                            
                        </div>
                        <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
            <!-- Material form subscription -->
        </div>
    </div>
</div>
@endsection
