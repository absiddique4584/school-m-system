@extends('admin.components.layout')
@section('title')
    Permission Edit | School-M-System
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Edit Permission</li>
            </ol>


            <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class=" mt-4">Edit Permission</h4>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                        <a href="{{ route('permission.manage') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Manage </h4></a>
                    </div>
                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Edit Permission</div>
                    <div class="card-body">
                        <hr style="margin-top: 0">


                        <form  method="POST" action="{{ route('permission.update',$user->id) }}" >
                            @csrf


                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="is_admin" class="col-sm-3 control-label">Is-Permitted</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="is_admin" id="is_admin">
                                        <option value="1" {{$user->is_admin== 1 ? "selected":""}}>Is-Permitted</option>
                                        <option value="0" {{$user->is_admin== 0 ? "selected":""}}>Not-Permit</option>
                                    </select>
                                </div>
                            </div>





                            <div class="row form-group">


                                <button style="margin-left: 23px;" type="submit" class="btn btn-info">Update</button>
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



