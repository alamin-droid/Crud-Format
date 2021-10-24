@extends('admin/layout/master')
@section('active_bank_bar','active')
@section('content')
    <div class="form-v9">
    <div class="page-content">
        <div class="form-v9-content" style="background-image: url('assets/images/backgrounds/form-v9.jpg')">
            <div class="abc">
                {!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'bank.store', 'enctype' => 'multipart/form-data' ]) !!}
                <h2>Registration Form</h2>
                <div class="form-row-total">
                    <div class="form-row">

                        <input type="text" name="name" id="full-name" class="input-text" placeholder="Client Name" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="number" id="full-name" class="input-text" placeholder="Client Number" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="mail" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                    </div>
                </div>
                <div class="form-row-total">
                    <div class="form-row">
                        <input type="text" name="address" id="password" class="input-text" placeholder="Address" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="pass" id="comfirm-password" class="input-text" placeholder="Password" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="ac_number"   placeholder="Account Number" required>
                    </div>
                </div>
                <div class="form-row-total">
                    <div class="form-row">
                        <select class="form-select input-text" aria-label="Default select example" class="input-text" name="v_type"required>
                        <option selected disabled >Identification Number</option>
                        <option value="NID">NID Number</option>
                        <option value="Passport">Passport Number</option>
                    </select>
                    </div>
                    <div class="form-row">
                        <input type="text" name="v_number"  class="input-text" placeholder="Identification Number" required >
                    </div>

                    <div class="form-row">
                        <input type="file" name="image" placeholder="upload Image"required>
                    </div>
                </div>
                <div class="form-row-last">
                    <input type="submit"  value="submit">
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@endsection
