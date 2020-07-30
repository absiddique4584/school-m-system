@extends('admin.components.layout')
@section('title')
   Class One Manage |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Subjects Class One</li>
            </ol>

            <div class="container-fluid ">
                <div class="row">
                    <div>
                        <a  href="{{ route('subjects.manage.one') }}"><button class="btn  {{ request()->is('subjects/manage/one') ? 'active-item':'' }}">One</button></a>
                        <a href="{{ route('subjects.manage.two') }}"><button class="btn btn-info">Two</button></a>
                        <a href="{{ route('subjects.manage.three') }}"><button class="btn btn-info">Three</button></a>
                        <a href="{{ route('subjects.manage.four') }}"><button class="btn btn-info">Four</button></a>
                        <a href="{{ route('subjects.manage.five') }}"><button class="btn btn-info">Five</button></a>
                        <a href="{{ route('subjects.manage.six') }}"><button class="btn btn-info">Six</button></a>
                        <a href="{{ route('subjects.manage.seven') }}"><button class="btn btn-info">Seven</button></a>
                        <a href="{{ route('subjects.manage.eight') }}"><button class="btn btn-info">Eight</button></a>
                        <a href="{{ route('subjects.manage.nine') }}"><button class="btn btn-info">Nine</button></a>
                        <a href="{{ route('subjects.manage.ten') }}"><button class="btn btn-info">Ten</button></a>
                        <a href="{{ route('subjects.manage.eleven') }}"><button class="btn btn-info">Eleven</button></a>
                        <a href="{{ route('subjects.manage.twelve') }}"><button class="btn btn-info">Twelve</button></a>
                    </div>
                    <style>
                        .active-item{
                            color: #c81dbe;
                            height: 35px;
                            width: auto;
                            display: inline-block;
                            background-color: #FF8E8F;
                        }
                    </style>
                    @include('sweetalert::alert')
                    <div class="col-sm-12">
                        <h4 class=" mt-4"><strong>Subjects Manage Class One Table</strong></h4>
                    </div>

                </div>
            </div>


            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Subjects Class <button class="btn btn-info">One</button>
                    <a href="{{route('subjects.manage.one.add')}}"><button class="btn btn-info">Add New</button></a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>image</th>
                                    <th>Subjects</th>
                                    <th>Teachers</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($subjectsOne as $admit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img style="width: 60px" src="{{ asset('uploads/subjectsOne/'.$admit->image) }}" alt=""></td>
                                        <td>{{ $admit->sub_name }}</td>
                                        <td>{{ $admit->teacher }}</td>
                                        <td>
                                            <a href="{{ route('subjects.manage.one.edit',base64_encode($admit->id)) }}"><button  class="btn btn-info" >Edit</button></a>
                                            <a href="{{ route('subjects.manage.one.delete',base64_encode($admit->id)) }}"><button class="btn btn-info">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </main>


@endsection



