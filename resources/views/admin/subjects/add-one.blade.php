@extends('admin.components.layout')
@section('title')
    Add Class One |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item "> Add Class One</li>
            </ol>



            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Add Class <button class="btn btn-info">One</button>
                    <a href="{{route('subjects.manage.one')}}"><button class="btn btn-info text-right">Go Back Class One</button></a>
                </div>

                <div class="card-body">

                    <form action="{{route('subjects.manage.one.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image"  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sub_name" class="col-sm-3 control-label">Subject Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="Subject Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="teacher" class="col-sm-3 control-label">Teacher Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="teacher" name="teacher" placeholder="Teacher Name" >
                            </div>
                        </div>


                        <div class="row form-group">
                            <button style="margin-left: 23px;" type="submit" class="btn btn-info">Add </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>


@endsection




