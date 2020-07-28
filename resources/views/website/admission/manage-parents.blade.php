
@extends('website.components.layouts')

@section('content')
    <div class="container">
        <form action="{{route('admission.parents.box')}}" method="post">
            @csrf
            <div class="row">
                @include('sweetalert::alert')
                <div class="admission-body">
                    <div class="admission-head">
                        <h5><strong>Registration Form For New Student</strong> </h5>
                    </div>
                    <hr>
                    <!-------------------------------------------------->
                    <div class="ligroup">
                        <h5><u>Second Section</u></h5>
                    </div>

                    <div class="ligroup">
                        <label for="this_class">Select Your Class(Now Which Class Do You Admit in.)</label>
                        <select class="select-group" name="this_class" id="this_class">
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
                        <label for="m_name">Mother's Name *</label>
                        <input id="m_name" class="input-group" type="text" name="m_name" value="{{old('m_name')}}" placeholder="Mother's Name">
                    </div>

                    <div class="ligroup">
                        <label for="m_phone">Mother's Phone</label>
                        <input id="m_phone" class="input-group" type="text" name="m_phone" value="{{old('m_phone')}}" placeholder="Mother's Phone Number">
                    </div>

                    <div class="ligroup">
                        <label for="f_name">Father's Name *</label>
                        <input id="f_name" class="input-group" type="text" name="f_name" value="{{old('f_name')}}" placeholder="Father's Name">
                    </div>
                    <div class="ligroup">
                        <label for="f_phone">Father's Phone</label>
                        <input id="f_phone" class="input-group" type="text" name="f_phone" value="{{old('f_phone')}}" placeholder="Father's Phone Number">
                    </div>

                    <div class="ligroup">
                        <label for="m_situation">Parent's Maritile Situation (Mention, Staying Together Or Not)</label>
                        <textarea class="text-area"  id="m_situation"  name="m_situation" value="{{old('m_situation')}}" placeholder="Permanent Maritile Situation"></textarea>
                    </div>

                    <div class="ligroup">
                        <label for="p_address">Present Address *</label>
                        <textarea class="text-area"  id="address"  name="address" value="{{old('address')}}" placeholder="Present Address"></textarea>
                    </div>

                    <div class="ligroup">
                        <label for="p_address">Permanent Address (If same then ignore this section)</label>
                        <textarea class="text-area"  id="p_address"  name="p_address" value="{{old('p_address')}}" placeholder="Permanent Address"></textarea>
                    </div>

                    <div class="button-up">
                        <button class="btn btn-success pull-right ">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
