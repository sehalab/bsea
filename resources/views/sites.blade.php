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
                    <strong>Sites</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('site.store') }}" enctype="multipart/form-data"  style="color: #757575;">
                        @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" name="description" id="description" class="form-control champ">
                            <label for="description">Description</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="local_E" id="local_E" class="form-control champ">
                            <label for="local_E">Latitude</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form">
                            <input type="number" name="local_N" id="local_N" class="form-control champ">
                            <label for="local_N">Longitude</label>
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
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Material checked -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="etat" value="1" id="materialChecked2" checked>
                            <label class="form-check-label" for="materialChecked2">Ce cite peut être deplacé</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <input type="hidden" id="next" next="betails" name="foyer_id" value="{{ $propriete }}">
                            <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
