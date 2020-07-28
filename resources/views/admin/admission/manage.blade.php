@extends('admin.components.layout')
@section('title')
    Admission Manage |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Admission</li>
            </ol>

            <div class="container-fluid ">
                <div class="row">
                    <div>
                        <a href="{{ route('admission.one') }}"><button class="btn btn-info ">One</button></a>
                        <a href="{{ route('admission.two') }}"><button class="btn btn-info">Two</button></a>
                        <a href=""><button class="btn btn-info">Three</button></a>
                        <a href=""><button class="btn btn-info">Four</button></a>
                        <a href=""><button class="btn btn-info">Five</button></a>
                        <a href=""><button class="btn btn-info">Six</button></a>
                        <a href=""><button class="btn btn-info">Seven</button></a>
                        <a href=""><button class="btn btn-info">Eight</button></a>
                        <a href=""><button class="btn btn-info">Nine</button></a>
                        <a href=""><button class="btn btn-info">Ten</button></a>
                        <a href=""><button class="btn btn-info">Eleven</button></a>
                        <a href=""><button class="btn btn-info">Twelve</button></a>
                    </div>

                    @include('sweetalert::alert')
                    <div class="col-sm-12">
                        <h4 class=" mt-4"><strong>Admission Manage Table</strong></h4>
                    </div>

                </div>
            </div>


            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Admission</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Previous School</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date Of Birth</th>
                                    <th>Place Of Birth</th>
                                    <th>Previous Class</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($admits as $admit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admit->name }}</td>
                                        <td><img style="width: 60px" src="{{ asset('uploads/admission/'.$admit->image) }}" alt=""></td>
                                        <td>{{ substr($admit->p_school,0,20) }}</td>
                                        <td>{{ $admit->s_phone }}</td>
                                        <td>{{ $admit->s_email }}</td>
                                        <td>{{ $admit->d_birth }}</td>
                                        <td>{{ $admit->p_birth }}</td>
                                        <td>{{ $admit->class }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#" class="btn btn-info "><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
                                            </div>
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



