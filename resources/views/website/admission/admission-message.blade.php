
@extends('website.components.layouts')

@section('content')
    <div class="container">
            <div class="row">
                @include('sweetalert::alert')
                <div class="admission-body">
                    <div class="admission-head">
                        <h5 class="welcome-message"><strong>Welcome!</strong> </h5>
                        <h5><strong> Mr.-- </strong> </h5>
                        <h5><strong>You Have Already Admitted in our Reputed Institution</strong> </h5>
                        @foreach($institutions as $institution)
                        <h5 class="school-name">{{$institution->school_name}}</h5>
                        @endforeach
                        <h5><strong>Later We Will Send You About Your Roll,Registration And Other Documents</strong> </h5>
                        <h5><strong>Also We Will Send you message about your class starting date.</strong> </h5>
                        <h5><strong>Thank You !</strong> </h5>
                        <a href="{{route('website.index')}}"><button class="btn btn-info btn-large">GO TO HOME PAGE</button></a>
                    </div>
                    <hr>
                </div>
            </div>
    </div>
@endsection
