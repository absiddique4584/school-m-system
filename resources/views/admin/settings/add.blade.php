@extends('admin.components.layout')
@section('title')
    Add Settings |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="javascript:avoid(0)">Dashboard</a></li>
                <li class="breadcrumb-item ">Add Settings</li>
            </ol>


            <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">
                    @include('sweetalert::alert')
                    <div class="col-sm-3">
                        <h3 class=" mt-4">Add Settings</h3>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                        <a href="{{ route('settings.manage') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Manage </h4></a>
                    </div>
                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Add Settings</div>
                    <div class="card-body">
                        <hr style="margin-top: 0">


                        <form  method="post" action="{{ route('settings.store') }}" enctype="multipart/form-data" >
                            @csrf


                            <div class="form-group">
                                <label for="logo" class="col-sm-3 control-label">Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="logo" name="logo" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="app_name" class="col-sm-3 control-label">App Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="app_name" name="app_name" value="{{ old('app_name') }}" required>
                                </div>
                            </div>



                            <div class="row form-group">
                                <button style="margin-left: 23px;" type="submit" class="btn btn-info">Add Setting</button>
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


