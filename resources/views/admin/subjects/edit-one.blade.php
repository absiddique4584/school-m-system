@extends('admin.components.layout')
@section('title')
    Class One Update |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item "> Update Class One</li>
            </ol>



            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Update Class <button class="btn btn-info">One</button>
                    <a href="{{route('subjects.manage.one')}}"><button class="btn btn-info text-right">Go Back Class One</button></a>
                </div>

                <div class="card-body">

                    <form action="{{route('subjects.manage.one.update',$editOne->id)}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="image" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" value="{{$editOne->image}}" >
                                <img style="width: 60px" src="{{ asset('uploads/subjectsOne/'.$editOne->image) }}" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sub_name" class="col-sm-3 control-label">Subject Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sub_name" name="sub_name" value="{{$editOne->sub_name}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="teacher" class="col-sm-3 control-label">Teacher Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="teacher" name="teacher" value="{{$editOne->teacher}}" >
                            </div>
                        </div>


                        <div class="row form-group">
                            <button style="margin-left: 23px;" type="submit" class="btn btn-info">Update </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>


@endsection



