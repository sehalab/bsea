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
                <div class="card-body px-lg-5">
                    <form method="POST" action="{{ route('foyer.store') }}" enctype="multipart/form-data" class="text-center" style="color: #757575;">
                        @csrf
                        <div class="md-form mt-3">
                            <input type="number" name="numero" id="materialSubscriptionFormPasswords" class="form-control @error('numero') is-invalid @enderror" value="{{ @old('numero') }}">
                            <label for="materialSubscriptionFormPasswords">Code</label>
                            @error('numero')
                                <div class="invalid-feedback">
                                    {{ $errors->first('numero') }}
                                </div>
                            @enderror
                        </div>
                        <!-- E-mai -->
                        <div class="md-form">
                            <input type="text" name="nom_village" id="materialSubscriptionFormEmail" class="form-control @error('nom_village') is-invalid @enderror" value="{{ @old('nom_village') }}">
                            <label for="materialSubscriptionFormEmail">Nom village</label>
                            @error('nom_village')
                                <div class="invalid-feedback">
                                    {{ $errors->first('numero') }}
                                </div>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="number" name="latitude" id="latitude" class="form-control  @error('latitude') is-invalid @enderror" value="{{ @old('latitude') }}" >
                            <label for="latitude">Latitude</label>
                            @error('latitude')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="number" name="longitude" id="longitude" class="form-control  @error('longitude') is-invalid @enderror" value="{{ @old('longitude') }}">
                            <label for="longitude">Longitude</label>
                            @error('longitude')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="md-form">
                            <div class="file-field">
                                <div class="btn btn-outline-info waves-effect btn-sm float-left">
                                    <span>Photo</span>
                                    <input type="file" name="photo">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="photo">
                                </div>
                            </div>
                            @error('photo')
                                <div class="valid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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
