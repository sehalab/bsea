@extends('layouts.app')
@section("content")
    <div class="wrapper-editor">

        <div class="block my-4">
            <div class="d-flex justify-content-center">
            <p class="h5 text-primary createShowP">0 row selected</p>
            </div>
        </div>

    <div class="row d-flex justify-content-center modalWrapper">
        <div class="modal fade addNewInputs" id="modalAdd1" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Add new form</h4>
                <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                <input type="text" id="inputName1" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputName1">Name</label>
                </div>

                <div class="md-form mb-5">
                <input type="text" id="inputPosition1" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputPosition1">Position</label>
                </div>

                <div class="md-form mb-5">
                <input type="text" id="inputOfficeInput1" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputOfficeInput1">Office</label>
                </div>

                <div class="md-form mb-5">
                <input type="text" id="inputAge1" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputAge1">Age</label>
                </div>

                <div class="md-form mb-5">
                <input type="date" id="inputDate1" class="form-control" placeholder="Select Date">
                <label data-error="wrong" data-success="right" for="inputDate1"></label>
                </div>

                <div class="md-form mb-5">
                <input type="text" id="inputSalary1" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputSalary1">Salary</label>
                </div>
                <div class="md-form mb-5">
                <input type="text" id="inputSalary1example" class="form-control validate">
                <label data-error="wrong" data-success="right" for="inputSalary1example">Example</label>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                <button class="btn btn-outline-primary btn-block buttonAdd" data-dismiss="modal">Add form
                <i class="fas fa-paper-plane-o ml-1"></i>
                </button>
            </div>
            </div>
        </div>
        </div>

        <div class="text-center">
        <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd1">Add<i
            class="fas fa-plus-square ml-1"></i></a>
        </div>

        <div class="modal fade modalEditClass" id="modalEdit1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
                        <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                    <input type="text" id="formNameEdit1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formNameEdit1">Name</label>
                    </div>

                    <div class="md-form mb-5">
                    <input type="text" id="formPositionEdit1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formPositionEdit1">Position</label>
                    </div>

                    <div class="md-form mb-5">
                    <input type="text" id="formOfficeEdit1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formOfficeEdit1">Office</label>
                    </div>

                    <div class="md-form mb-5">
                    <input type="text" id="formAgeEdit1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formAgeEdit1">Age</label>
                    </div>

                    <div class="md-form mb-5">
                    <input type="text" id="formDateEdit1" class="form-control datepicker">
                    <label data-error="wrong" data-success="right" for="formDateEdit1">Date</label>
                    </div>

                    <div class="md-form mb-5">
                    <input type="text" id="formSalaryEdit1" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formSalaryEdit1">Salary</label>
                    </div>
                    <div class="md-form mb-5">
                    <input type="text" id="formSalaryEdit1ex" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="formSalaryEdit1ex">Example</label>
                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center editInsideWrapper">
                    <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
                    form
                    <i class="fas fa-paper-plane-o ml-1"></i>
                    </button>
                </div>
                </div>
            </div>
        </div>

        <div class="text-center buttonEditWrapper">
            <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit1"
                disabled>Edit<i class="fas fa-pencil-square-o ml-1"></i></a>
        </div>

        <div class="modal fade" id="modalDelete1" tabindex="-1" role="dialog" aria-labelledby="modalDelete1"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <p class="text-center h4">Are you sure to delete selected row?</p>

                </div>
                <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
                    <button type="button" class="btn btn-danger btnYesClass" id="btnYes1" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-primary btnNoClass" id="btnNo1" data-dismiss="modal">No</button>
                </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete"
                disabled>Delete<i class="fas fa-times ml-1"></i></a>
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
