
@extends('website.components.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="">
                <div class="">
                    <h6><strong>Click For Other Class Students Information</strong> </h6>
                </div>
                <div class="container-fluid ">
                    <div class="row">
                        <div>
                            <a  href="{{ route('studentlist.manage.one') }}"><button class="btn  {{ request()->is('studentlist/manage/one') ? 'active-item':'' }}">One</button></a>
                            <a href="{{ route('studentlist.manage.two') }}"><button class="btn btn-info">Two</button></a>
                            <a href="{{ route('studentlist.manage.three') }}"><button class="btn btn-info">Three</button></a>
                            <a href="{{ route('studentlist.manage.four') }}"><button class="btn btn-info">Four</button></a>
                            <a href="{{ route('studentlist.manage.five') }}"><button class="btn btn-info">Five</button></a>
                            <a href="{{ route('studentlist.manage.six') }}"><button class="btn btn-info">Six</button></a>
                            <a href="{{ route('studentlist.manage.seven') }}"><button class="btn btn-info">Seven</button></a>
                            <a href="{{ route('studentlist.manage.eight') }}"><button class="btn btn-info">Eight</button></a>
                            <a href="{{ route('studentlist.manage.nine') }}"><button class="btn btn-info">Nine</button></a>
                            <a href="{{ route('studentlist.manage.ten') }}"><button class="btn btn-info">Ten</button></a>
                            <a href="{{ route('studentlist.manage.eleven') }}"><button class="btn btn-info">Eleven</button></a>
                            <a href="{{ route('studentlist.manage.twelve') }}"><button class="btn btn-info">Twelve</button></a>
                            <a href="javascript:avoid(0)"><button class="btn btn-info">Others</button></a>
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


                    </div>
                </div>

                <hr>
                <div class="">
                    <h6>Class >> <button class="btn btn-info">One</button></h6>
                </div>

                <div class="">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Mother</th>
                                <th>Father</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($admission_one as $admit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img style="width: 60px" src="{{ asset('uploads/admission/'.$admit->admission_p_part->image) }}" alt=""></td>
                                    <td>{{ $admit->admission_p_part->name }}</td>
                                    <td>{{ $admit->m_name }}</td>
                                    <td>{{ $admit->f_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection




