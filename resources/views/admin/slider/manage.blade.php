@extends('admin.components.layout')
@section('title')
    Manage Slider | School-M-System
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Sliders</li>
            </ol>


<!--------------------------------------------->
<!--------------------------------------------->


                            <div class="container-fluid ">
                                <div class="row">

                                    @include('sweetalert::alert')
                                    <div class="col-sm-3">
                                        <h1 class=" mt-4">Sliders</h1>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3">
                                        <a href="{{ route('slider.add') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Add Slider</h4></a>
                                    </div>
                                </div>



                                <div class="card mb-4 ">
                                    <div class="card-header"><i class="fa fa-table mr-1"></i>Sliders</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>SI NO.</th>
                                                        <th>Image</th>
                                                        <th>Admin Name</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($sliders as $slider)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td><img style="width: 60px" src="{{ asset('uploads/slider/'.$slider->image) }}" alt=""></td>
                                                        <td>{{ auth()->user()->is_admin== 1 ? 'Principal':'Ast. Principal' }}</td>
                                                        <td>
                                                        <button class="btn btn-info "><input  type="checkbox" {{ $slider->status === 'active' ? 'checked':'' }}   ></button>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{ route('slider.edit', base64_encode($slider->id)) }}" class="btn btn-info "><i class="fa fa-pencil"></i></a>
                                                            <a href="{{ route('slider.delete', base64_encode($slider->id)) }}" class="btn btn-danger "><i class="fa fa-trash-o"></i></a>
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

