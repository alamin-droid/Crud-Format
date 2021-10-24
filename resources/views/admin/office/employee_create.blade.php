@extends('admin.layout.master')
@section('active_employee_bar' ,'active')
@section('content')
<div class="container">
    <br><br><br><br>
    <div class="row">
    <div class="col-md-8">
        <div class="form-group">
{!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'employee.store']) !!}
    <input class="form-control" type="text" name="user_name" placeholder="User Name" required></input> <br>
    <input class="form-control" type="text" name="user_contact" placeholder="Contact Number" required></input> <br>
    <input class="form-control" type="Password" name="user_pass" placeholder="Password" required></input> <br>
            <select class="form-select" aria-label="Default select example" name="dpt_name" required>
                <option selected disabled value="" >Department</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
            </select>
    <input type="submit" value="submit" />
{!! Form::close() !!}
@endsection
{{--@extends('admin.layout.master')--}}
{{--@section('content')--}}
{{--    <div class="form-body">--}}
{{--        <div class="row">--}}
{{--            <div class="form-holder">--}}
{{--                <div class="form-content">--}}
{{--                    <div class="form-items">--}}
{{--                        <h3>Register Today</h3>--}}
{{--                        <p>Fill in the data below.</p>--}}
{{--                        <form class="requires-validation" novalidate>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>--}}

{{--                            </div>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-12">--}}
{{--                                <select class="form-select mt-3" required>--}}
{{--                                    <option selected disabled value="">Position</option>--}}
{{--                                    <option value="jweb">Junior Web Developer</option>--}}
{{--                                    <option value="sweb">Senior Web Developer</option>--}}
{{--                                    <option value="pmanager">Project Manager</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}


{{--                            <div class="col-md-12">--}}
{{--                                <input class="form-control" type="password" name="password" placeholder="Password" required>--}}
{{--                            </div>--}}


{{--                            <div class="col-md-12 mt-3">--}}
{{--                                <label class="mb-3 mr-1" for="gender">Gender: </label>--}}

{{--                                <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>--}}
{{--                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>--}}

{{--                                <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>--}}
{{--                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>--}}

{{--                                <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>--}}
{{--                                <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>--}}

{{--                            </div>--}}

{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>--}}
{{--                                <label class="form-check-label">I confirm that all data are correct</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-button mt-3">--}}
{{--                                <button id="submit" type="submit" class="btn btn-primary">Register</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
