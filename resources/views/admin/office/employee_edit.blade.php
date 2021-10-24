@extends('admin.layout.master')
@section('active_employee_bar' ,'active')
@section('content')
    <div class="container">
        <br><br><br><br>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::open(['class'=>'form-sample','method'=>'PATCH','route' =>['employee.update', $user->id]]) !!}
                    <input class="form-control" type="text" name="user_name" placeholder="User Name" value="{{ $user->user_name}}"></input> <br>
                    <input class="form-control" type="text" name="user_contact" placeholder="Contact Number" value="{{ $user->user_contact }}"></input> <br>
{{--                    <input class="form-control" type="Password" name="user_pass" placeholder="Password"></input> <br>--}}

                    <select class="form-select"  aria-label="Default select example" name="dpt_name"  required>
                        <option selected disabled  >Department</option>
                        <option value="CSE" @if($user->dpt_name == 'CSE') selected @endif >CSE</option>
                        <option value="EEE" @if($user->dpt_name == 'EEE') selected @endif>EEE</option>
                        <option value="BBA" @if($user->dpt_name == 'BBA') selected @endif>BBA</option>
                    </select>

                    <input type="submit" value="submit" />
    {!! Form::close() !!}
@endsection
