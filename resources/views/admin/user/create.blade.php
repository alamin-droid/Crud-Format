@extends('admin.layout.master')
@section('active_user_bar' ,'active')
@section('content')
{{--<div class="container-fluid">--}}
{{--    <br><br><br><br>--}}
{{--    <div class="row">--}}
{{--    <div class="col-md-8">--}}
{{--        <div class="form-group">--}}
{{--{!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'user.store', 'enctype' => 'multipart/form-data' ]) !!}--}}
{{--    <input class="form-control" type="text" name="user_name" placeholder="User Name"></input> <br>--}}
{{--    <input class="form-control" type="text" name="user_contact" placeholder="Contact Number"></input> <br>--}}
{{--    <input class="form-control" type="Password" name="user_pass" placeholder="Password"></input> <br>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <label for="select_role">Upload Your Photo</label>--}}
{{--                    <input type='file' class="from-control" name="image" accept=".jpg , .jpeg ,.png , .svg " required>--}}
{{--                </div>--}}
{{--                <div class="col-md-6"><select class="form-select" aria-label="Default select example" name="dpt_name">--}}
{{--                        <option selected disabled value="" >Department</option>--}}
{{--                        <option value="CSE">CSE</option>--}}
{{--                        <option value="EEE">EEE</option>--}}
{{--                        <option value="BBA">BBA</option>--}}
{{--                    </select></div>--}}
{{--            </div> <br><br><br>--}}
{{--    <input class="btn btn-info" type="submit" value="submit" />--}}
{{--{!! Form::close() !!}--}}




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
        background: url("https://www.teahub.io/photos/full/293-2931587_hd-backgrounds.jpg") no-repeat center;
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
{!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'user.store', 'enctype' => 'multipart/form-data' ]) !!}
        <div class="title">
            <i class="fas fa-pencil-alt"></i>
            <h2>Register here</h2>
        </div>
        <div class="info">
            <input class="fname" type="text" name="user_name" placeholder="Full name"required>
{{--            <input type="text" name="user_mail" placeholder="Mail Address"required>--}}
            <input type="text" name="user_contact" placeholder="Phone number"required>
            <input type="password" name="user_pass" placeholder="Password">
            <select class="form-select" aria-label="Default select example" name="dpt_name"required>
                <option selected disabled value="" >Department</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="BBA">BBA</option>
            </select>
            <input type="file" name="image" placeholder="upload Image"required>
        </div>

        <button type="submit" href="/">Submit</button>
    {!! Form::close() !!}
@endsection
