
@extends('website.components.layouts')

@section('content')
    <div class="container">
            <div class="row">
                <div class="admission-body">
                    <div class="admission-head">
                        <h5><strong>List Our Students</strong> </h5>
                    </div>
                    <hr>
                    <div class="ligroup">
                        <h5><u>Class wise List</u></h5>
                    </div>

                    <div class="ligroup">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Class Name</th>
                                    <th>Page Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="s_email">Class One</label></td>
                                    <td> <a href="{{ route('studentlist.manage.one') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Two</label></td>
                                    <td> <a href="{{ route('studentlist.manage.two') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Three</label></td>
                                    <td> <a href="{{ route('studentlist.manage.three') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Four</label></td>
                                    <td> <a href="{{ route('studentlist.manage.four') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Five</label></td>
                                    <td> <a href="{{ route('studentlist.manage.five') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Six</label></td>
                                    <td> <a href="{{ route('studentlist.manage.six') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Seven</label></td>
                                    <td> <a href="{{ route('studentlist.manage.seven') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Eight</label></td>
                                    <td> <a href="{{ route('studentlist.manage.eight') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Nine</label></td>
                                    <td> <a href="{{ route('studentlist.manage.nine') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Ten</label></td>
                                    <td> <a href="{{ route('studentlist.manage.ten') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Eleven</label></td>
                                    <td> <a href="{{ route('studentlist.manage.eleven') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email">Class Twelve</label></td>
                                    <td> <a href="{{ route('studentlist.manage.twelve') }}"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                                <tr>
                                    <td><label for="s_email"> Others Class</label></td>
                                    <td> <a href="javascript:avoid(0)"><button class="btn btn-info">Click</button></a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
    </div>
@endsection



