@extends('admin.layout.master')
@section('active_library_bar' ,'active')
@section('content')
    <div class="container">
        <br><br><br><br>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::open(['class'=>'form-sample','method'=>'PATCH','route' =>['library.update', $user->id]]) !!}
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Name" name="user_name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                            <select class="form-select" name="dpt_name" aria-label="Default select example">
                                <option selected disabled value="">Department</option>
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="BBA">BBA</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="user_contact">
                    </div>

                    <div class="input-group">
                        <input class=" input--style-3" type="Password" name="user_pass" placeholder="Password"></input>
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Submit</button>
                    </div>
    {!! Form::close() !!}
@endsection
