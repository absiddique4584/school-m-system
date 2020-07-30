@extends('admin.components.layout')
@section('title')
    Subjects Manage |
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <br>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item ">Manage Subjects</li>
            </ol>



            <div class="card mb-4 ">
                <div class="card-header"><i class="fa fa-table mr-1"></i>Subjects</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SI NO.</th>
                                    <th>Class</th>
                                    <th>For Details</th>
                                </tr>
                            </thead>

                            <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>One</td>
                                        <td><a href="{{ route('subjects.manage.one') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Two</td>
                                        <td><a href="{{ route('subjects.manage.two') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Three</td>
                                        <td><a href="{{ route('subjects.manage.three') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Four</td>
                                        <td><a href="{{ route('subjects.manage.four') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Five</td>
                                        <td><a href="{{ route('subjects.manage.five') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Six</td>
                                        <td><a href="{{ route('subjects.manage.six') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Seven</td>
                                        <td><a href="{{ route('subjects.manage.seven') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Eight</td>
                                        <td><a href="{{ route('subjects.manage.eight') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Nine</td>
                                        <td><a href="{{ route('subjects.manage.nine') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Ten</td>
                                        <td><a href="{{ route('subjects.manage.ten') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Eleven</td>
                                       <td><a href="{{ route('subjects.manage.eleven') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Twelve</td>
                                        <td><a href="{{ route('subjects.manage.twelve') }}"><button class="btn btn-info">Click Here</button></a></td>
                                    </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </main>


@endsection




