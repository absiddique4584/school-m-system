@extends('admin.components.layout')
@section('title')
    Add Slider | School-M-System
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="javascript:avoid(0)">Dashboard</a></li>
                <li class="breadcrumb-item ">Add Slider</li>
            </ol>


        <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">
                    @include('sweetalert::alert')
                    <div class="col-sm-3">
                        <h3 class=" mt-4">Add Slider</h3>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                        <a href="{{ route('slider.manage') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Manage </h4></a>
                    </div>
                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Add Slider</div>
                    <div class="card-body">
                        <hr style="margin-top: 0">


                        <form class="form-horizontal" method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data" >
                            @csrf


                            <div class="form-group">
                                <label for="image" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" id="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>





                            <div class="row form-group">


                                    <button style="margin-left: 23px;" type="submit" class="btn btn-info">Add Slider</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
                <!--------------------------------------------->
                <!--------------------------------------------->


            </div>
    </main>


@endsection


