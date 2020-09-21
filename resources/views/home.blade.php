@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Material form subscription -->
            <div class="card">
                @if (isset($section))
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>{{ $section }}</strong>
                    </h5>
                    @switch($section)
                    @case('propriete')
                        @include('propriete');
                        @break
                    @case("details")
                        @include('details')
                        @break
                    @default
                @endswitch
                @else
                    @include('foyer')
                @endif
                <!--Card content-->

            </div>
            <!-- Material form subscription -->
        </div>
    </div>
</div>
@endsection
