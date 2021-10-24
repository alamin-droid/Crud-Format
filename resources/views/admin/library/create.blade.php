{{--@extends('admin.layout.master')--}}
{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <br><br><br><br>--}}
{{--    <div class="row">--}}
{{--    <div class="col-md-8">--}}
{{--        <div class="form-group">--}}
{{--{!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'library.store']) !!}--}}
{{--    <input class="form-control" type="text" name="user_name" placeholder="User Name"></input> <br>--}}
{{--            <select class="form-select" aria-label="Default select example">--}}
{{--                <option selected>Department</option>--}}
{{--                <option value="1">CSE</option>--}}
{{--                <option value="2">EEE</option>--}}
{{--                <option value="3">BBA</option>--}}
{{--            </select>--}}
{{--    <input class="form-control" type="text" name="user_contact" placeholder="Contact Number"></input> <br>--}}
{{--    <input class="form-control" type="Password" name="user_pass" placeholder="Password"></input> <br>--}}
{{--    <input type="submit" value="submit" />--}}
{{--{!! Form::close() !!}--}}
{{--@endsection--}}


@extends('admin.layout.master')
@section('active_library_bar' ,'active')
@section('content')
<body>
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>
                {!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'library.store']) !!}
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Name" name="user_name" required>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday"required>
                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender" required>
                                <option disabled="disabled" name="gender" selected="selected">Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                            <select class="form-select" name="dpt_name" aria-label="Default select example"required>
                                                <option selected disabled value="">Department</option>
                                                <option value="CSE">CSE</option>
                                                <option value="EEE">EEE</option>
                                                <option value="BBA">BBA</option>
                                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email"required>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="user_contact"required>
                    </div>

                     <div class="input-group">
                    <input class=" input--style-3" type="Password" name="user_pass" placeholder="Password"required></input>
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>



</body>

</html>
@endsection
<!-- end document-->
