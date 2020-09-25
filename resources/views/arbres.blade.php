@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Arbres</strong>
                </h5>
                <div class="card-body px-lg-5 carde">
                    <form method="POST" action="{{ route('arbre.store') }}" enctype="multipart/form-data"  style="color: #757575;">
                        @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" name="usage" id="usage" class="form-control champ">
                            <label for="usage">Usage</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="md-form mt-3">
                            <input type="text" name="nom" id="nom" class="form-control champ">
                            <label for="nomar">Nom</label>
                            <div class="invalid-feedback"></div>
                        </div>

                        <input type="hidden" id="next" next="sites" name="foyer_id" value="{{ $propriete }}">
                            <!-- Sign in button -->
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection