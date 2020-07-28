@extends('admin.components.layout')
@section('title')
    Admission Five |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Admission Five</li>
            </ol>

            <div class="container-fluid ">
                <div class="row">
                    <div>
                        <a href="{{ route('admission.one') }}"><button class="btn btn btn-info">One</button></a>
                        <a href="{{ route('admission.two') }}"><button class="btn btn-info">Two</button></a>
                        <a href="{{ route('admission.three') }}"><button class="btn btn-info">Three</button></a>
                        <a href="{{ route('admission.four') }}"><button class="btn btn-info">Four</button></a>
                        <a href="{{ route('admission.five') }}"><button class="btn {{ request()->is('admission/five') ? 'active-item':'' }}">Five</button></a>
                        <a href="{{ route('admission.six') }}"><button class="btn btn-info">Six</button></a>
                        <a href="{{ route('admission.seven') }}"><button class="btn btn-info">Seven</button></a>
                        <a href="{{ route('admission.eight') }}"><button class="btn btn-info">Eight</button></a>
                        <a href="{{ route('admission.nine') }}"><button class="btn btn-info">Nine</button></a>
                        <a href="{{ route('admission.ten') }}"><button class="btn btn-info">Ten</button></a>
                        <a href="{{ route('admission.eleven') }}"><button class="btn btn-info">Eleven</button></a>
                        <a href="{{ route('admission.twelve') }}"><button class="btn btn-info">Twelve</button></a>
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
                        <h4 class=" mt-4"><strong>Admission Manage Five Table</strong></h4>
                    </div>

                </div>
            </div>


            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Admission Class >> Five</div>
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
                                    <th>Admit Class</th>
                                    <th>Previous Class</th>
                                    <th>Mother</th>
                                    <th>Mother's Phone</th>
                                    <th>Father</th>
                                    <th>Father's Phone</th>
                                    <th>Address </th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($admission_five as $admit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admit->admission_p_part->name }}</td>
                                        <td><img style="width: 60px" src="{{ asset('uploads/admission/'.$admit->admission_p_part->image) }}" alt=""></td>
                                        <td>{{ substr($admit->admission_p_part->p_school,0,20) }}</td>
                                        <td>{{ $admit->admission_p_part->s_phone }}</td>
                                        <td>{{ $admit->admission_p_part->s_email }}</td>
                                        <td>{{ $admit->admission_p_part->d_birth }}</td>
                                        <td>{{ $admit->admission_p_part->p_birth }}</td>
                                        <td>{{ $admit->this_class }}</td>
                                        <td>{{ $admit->admission_p_part->class }}</td>
                                        <td>{{ $admit->m_name }}</td>
                                        <td>{{ $admit->m_phone }}</td>
                                        <td>{{ $admit->f_name }}</td>
                                        <td>{{ $admit->f_phone }}</td>
                                        <td>{{ substr($admit->address,0,20) }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#" class="btn btn-info "><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('admission.five.delete', base64_encode($admit->id)) }}" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
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




