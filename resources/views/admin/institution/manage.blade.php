@extends('admin.components.layout')
@section('title')
    Manage Institution |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Institution</li>
            </ol>

            <div class="container-fluid ">
                <div class="row">

                    @include('sweetalert::alert')
                    <div class="col-sm-6">
                        <h4 class=" mt-4"><strong>Institution Information Table</strong></h4>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>


                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Hello Admin ! You Should Not Add More Then One Item.</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SI NO.</th>
                                        <th>Institution Name</th>
                                        <th>Registration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($institutions as $institution)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$institution->school_name}}</td>
                                            <td>{{$institution->school_reg}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('institution.edit', base64_encode($institution->id)) }}" class="btn btn-info "><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('institution.delete', base64_encode($institution->id)) }}" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <br>
            <br>
            <hr>
            <br>
            <h4><strong>Add New Information </strong></h4>
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <form action="{{route('institution.store')}}" method="post">
                            @csrf
                            <div class="add-information">
                                <tr>
                                    <td>
                                        <label for=""><strong>Institution Name</strong></label>
                                        <input class="input-group information-input" type="text" name="school_name" value="{{old('school_name')}}" placeholder="Institution Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for=""><strong>Institution Reg.</strong></label>
                                        <input class="input-group information-input" type="text" name="school_reg" value="{{old('school_reg')}}" placeholder="Institution Registration Number">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-info pull-right " type="submit">Add Info</button>
                                    </td>
                                </tr>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
            <br>
        </div>
    </main>


@endsection



