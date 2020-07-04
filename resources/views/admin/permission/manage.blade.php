@extends('admin.components.layout')
@section('title')
    Permission Manage | School-M-System
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Permission</li>
            </ol>


            <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">

                    @include('sweetalert::alert')
                    <div class="col-sm-12">
                        <h4 class=" mt-4"><strong>Permission Manage Table</strong></h4>
                    </div>

                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Permission</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SI NO.</th>
                                        <th>Admin Name</th>
                                        <th>Admin Email</th>
                                        <th>Permission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <button class="btn btn-{{ $user->is_admin == '1' ? 'info':'danger' }}">{{ $user->is_admin == '1' ? 'Is-Permitted':'Not-Permit' }}</button>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('permission.edit', base64_encode($user->id)) }}" class="btn btn-info "><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('permission.delete', base64_encode($user->id)) }}" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <!--------------------------------------------->
                <!--------------------------------------------->


            </div>
    </main>


@endsection


