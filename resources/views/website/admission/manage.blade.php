
@extends('website.components.layouts')

@section('content')
    <div class="container">
        <form action="{{route('admission.student.part')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @include('sweetalert::alert')
                <div class="admission-body">
                    <div class="admission-head">
                        <h5><strong>Registration Form For New Student</strong> </h5>
                    </div>
                    <hr>
                    <div class="ligroup">
                        <h5><u>First  Section</u></h5>
                    </div>
                    <div class="ligroup">
                        <label for="name"><p>Student Name *</p></label>
                        <input id="name" class="input-group" type="text" name="name" value="{{old('name')}}" placeholder="Write Your Name">
                    </div>

                    <div class="ligroup">
                        <label for="p_school">Student Previous School Name</label>
                        <input id="p_school" class="input-group" type="text" name="p_school" value="{{old('p_school')}}" placeholder="Preveous School Name">
                    </div>

                    <div class="ligroup">
                        <label for="s_phone">Student Phone</label>
                        <input id="s_phone" class="input-group" type="text" name="s_phone" value="{{old('s_phone')}}" placeholder="Student Phone Number">
                    </div>

                    <div class="ligroup">
                        <label for="s_email">Student Email</label>
                        <input id="s_email" class="input-group" type="email" name="s_email" value="{{old('s_email')}}" placeholder="Student Email">
                    </div>

                    <div class="ligroup">
                        <label for="d_birth">Date Of Birth</label>
                        <input id="d_birth" class="input-group" type="date" name="d_birth" value="{{old('d_birth')}}" placeholder="Date Of Birth">
                    </div>

                    <div class="ligroup">
                        <label for="d_birth">Place Of Birth</label>
                        <input id="p_birth" class="input-group" type="text" name="p_birth" value="{{old('p_birth')}}" placeholder="Place Of Birth">
                    </div>

                    <div class="ligroup">
                        <label for="s_email">Select Your Class(Your Before School/collage)</label>
                        <select class="select-group" name="class" id="">
                            <option  value="#">Select Your Class</option>
                            <option value="one">One</option>
                            <option value="two">Two</option>
                            <option value="three">Three</option>
                            <option value="four">Four</option>
                            <option value="five">Five</option>
                            <option value="six">Six</option>
                            <option value="seven">Seven</option>
                            <option value="eight">Eight</option>
                            <option value="nine">Nine</option>
                            <option value="ten">Ten</option>
                            <option value="eleven">Eleven</option>
                            <option value="twelve">Twelve</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                    <div class="ligroup">
                        <label for="image">Student image</label>
                        <input id="image" class="input-group" type="file" name="image"  >
                    </div>

                    <div class="button-up">
                        <button class="btn btn-success pull-right ">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
