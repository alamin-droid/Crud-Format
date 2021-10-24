@extends('admin.layout.master')
@section('active_user_bar' ,'active')
@section('content')




    <style>

        html, body {
            min-height: 100%;
        }
        body, div, form, input, select, p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }
        body {
            background: url("https://www.teahub.io/photos/full/99-997843_4k-resolution-4k-hd-wallpapers-for-pc.jpg") no-repeat center fixed;
            background-size: cover;
        }
        h1, h2 {
            text-transform: uppercase;
            font-weight: 400;
        }
        h2 {
            margin: 0 0 0 8px;
        }
        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 25px;
            background: rgba(0, 0, 0, 0.5);
        }
        .left-part, form {
            padding: 25px;
        }
        .left-part {
            text-align: center;
        }
        .fa-graduation-cap {
            font-size: 72px;
        }
        form {
            background: rgba(0, 0, 0, 0.7);
        }
        .title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .info {
            display: flex;
            flex-direction: column;
        }
        input, select {
            padding: 5px;
            margin-bottom: 30px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }
        input::placeholder {
            color: #eee;
        }
        option:focus {
            border: none;
        }
        option {
            background: black;
            border: none;
        }
        .checkbox input {
            margin: 0 10px 0 0;
            vertical-align: middle;
        }
        .checkbox a {
            color: #26a9e0;
        }
        .checkbox a:hover {
            color: #85d6de;
        }
        .btn-item, button {
            padding: 10px 5px;
            margin-top: 20px;
            border-radius: 5px;
            border: none;
            background: #26a9e0;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            color: #fff;
        }
        .btn-item {
            display: inline-block;
            margin: 20px 5px 0;
        }
        button {
            width: 100%;
        }
        button:hover, .btn-item:hover {
            background: #85d6de;
        }
        @media (min-width: 568px) {
            html, body {
                height: 100%;
            }
            .main-block {
                flex-direction: row;
                height: calc(100% - 50px);
            }
            .left-part, form {
                flex: 1;
                height: auto;
            }
        }


    </style>

    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-graduation-cap"></i>
            <h1>Register to our courses</h1>

            <div class="btn-group">
                <a class="btn-item" href="http://setcolbd.com/">Learn HTML</a>
                <a class="btn-item" href="http://setcolbd.com/">Select Quiz</a>
            </div>
        </div>
        {!! Form::open(['class'=>'form-sample','method'=>'PATCH','route' =>['user.update', $user->id], 'enctype' => 'multipart/form-data' ]) !!}
        <div class="title">
            <i class="fas fa-pencil-alt"></i>
            <h2>Register here</h2>
        </div>
        <div class="info">
            <input class="fname" type="text" name="user_name" value="{{ $user->user_name}}" placeholder="Full name">
{{--            <input type="text" name="user_mail" placeholder="Mail Address">--}}
            <input type="text" name="user_contact" value="{{ $user->user_contact }}" placeholder="Phone number">
{{--            <input type="password" name="user_pass" value="user_pass" placeholder="Password">--}}
            <select class="form-select" aria-label="Default select example" name="dpt_name" >
                <option selected disabled value="" >Department</option>
                <option value="CSE" @if($user->dpt_name == 'CSE') selected @endif>CSE</option>
                <option value="EEE" @if($user->dpt_name == 'EEE') selected @endif>EEE</option>
                <option value="BBA" @if($user->dpt_name == 'BBA') selected @endif>BBA</option>
            </select>
            <input type="file" name="user_image" placeholder="upload Image"  accept=".jpg , .jpeg ,.png , .svg "  >
            <img src="{{asset('/assets/images/user_images/'.$user->image)}}" class="user_image" style="width: 50%">
        </div>

        <input class="btn btn-info" type="submit" value="Update" placeholder="" />
    {!! Form::close() !!}









@endsection
