@extends('admin.components.layout')
@section('title')
    Manage Settings |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Settings</li>
            </ol>


            <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">

                    @include('sweetalert::alert')
                    <div class="col-sm-3">
                        <h1 class=" mt-4">Settings</h1>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                        <a href="{{ route('settings.add') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Add Settings</h4></a>
                    </div>
                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i><strong>Hello Admin ! You Should Not Add More Then One Item.</strong></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>SI NO.</th>
                                        <th>Logo</th>
                                        <th>Image</th>
                                        <th>App Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($settings as $setting)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><img style="width: 60px" src="{{ asset('uploads/settings-logo/'.$setting->logo) }}" alt=""></td>
                                            <td><img style="width: 60px" src="{{ asset('uploads/settings/'.$setting->image) }}" alt=""></td>
                                             <td>{{$setting->app_name}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('settings.edit', base64_encode($setting->id)) }}" class="btn btn-info "><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ route('settings.delete', base64_encode($setting->id)) }}" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
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


