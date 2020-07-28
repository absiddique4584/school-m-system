@extends('admin.components.layout')
@section('title')
    Edit Slider |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Edit Slider</li>
            </ol>


            <!--------------------------------------------->
            <!--------------------------------------------->


            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class=" mt-4">Update Slider</h4>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-3">
                        <a href="{{ route('slider.manage') }}"><h4 style="margin-left: 100px;" class='btn btn-info mt-4'>Manage </h4></a>
                    </div>
                </div>



                <div class="card mb-4 ">
                    <div class="card-header"><i class="fa fa-table mr-1"></i>Edit Slider</div>
                    <div class="card-body">
                        <hr style="margin-top: 0">


                        <form  method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label for="image" class="col-sm-3 control-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image" name="image" value="{{$slider->image}}" required>
                                    <img  style="height: 100px;" src="{{ asset('uploads/slider/'.$slider->image) }}"  alt="">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status" id="status">
                                        <option value="active" {{$slider->status=='active'? "selected":""}}>Active</option>
                                        <option value="inactive" {{$slider->status=='inactive'? "selected":""}}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                                                        <div class="row form-group">
                                <button style="margin-left: 23px;" type="submit" class="btn btn-info">Update Slider</button>
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



