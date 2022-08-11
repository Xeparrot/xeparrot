@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">



                                <div class="form-group">
                                    <label>Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <button type="submit" class="btn btn-success pull-right">Create New Project</button><br>
                    </div><br>
                </div>
        </div>
    </div>



@endsection
