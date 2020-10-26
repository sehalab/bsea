@extends('layouts.app')
@section("content")
    <div class="wrapper-editor">

        <div class="text-center">
        <a href="{{ route('start') }}" class="btn btn-info btn-rounded btn-sm" >Add<i
            class="fas fa-plus-square ml-1"></i></a>
        </div>
    </div>

    <table id="dt-more-columns" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Code</th>
                <th class="th-sm">Nom village</th>
                <th class="th-sm">Latitude</th>
                <th class="th-sm">Longitude</th>
                <th class="th-sm">Enquêteur</th>
                <th class="th-sm">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foyers as $foyer)
                <tr>
                    <td>{{ $foyer->numero }}</td>
                    <td>{{ $foyer->nom_village }}</td>
                    <td>{{ $foyer->latitude }}</td>
                    <td>{{ $foyer->longitude }}</td>
                    <td>{{ $foyer->user->name }}</td>
                    <td>
                        <a href="{{ route('foyer.show', $foyer->id) }}" class="btn  btn-sm btn-outline-primary">
                            Details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Code</th>
                <th>Nom village</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Enquêteur</th>
                <th>Details</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
