@extends('admin.components.layout')
@section('title')
    Update Institution |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Update Institution</li>
            </ol>

            <div class="container-fluid ">
                <div class="row">

                    @include('sweetalert::alert')
                    <h4><strong>Update Information </strong></h4>
                </div>
            </div>


            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <form action="{{route('institution.update',$institution->id)}}" method="post">
                            @csrf
                            <div class="add-information">
                                <tr>
                                    <td>
                                        <label for=""><strong>Institution Name</strong></label>
                                        <input class="input-group information-input" type="text" name="school_name" value="{{ $institution->school_name }}" placeholder="Institution Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for=""><strong>Institution Reg.</strong></label>
                                        <input class="input-group information-input" type="text" name="school_reg" value="{{ $institution->school_reg }}" placeholder="Institution Registration Number">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-info pull-right " type="submit">Update Info</button>
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



