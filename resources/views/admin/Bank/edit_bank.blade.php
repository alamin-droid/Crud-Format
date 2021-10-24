@extends('admin.layout.master')
@section('active_bank_bar','active')
@section('content')

    <div class="form-v9">
        <div class="page-content">
            <div class="form-v9-content">
                <div class="abc">
                    {!! Form::open(['class'=>'form-sample','method'=>'PATCH','route' =>['bank.update',$user->id], 'enctype' => 'multipart/form-data' ]) !!}
                    <h2>Registration Form</h2>
                    <div class="form-row-total">
                        <div class="form-row">

                            <input type="text" name="name" id="full-name" value="{{$user->client_name}}" class="input-text" placeholder="Client Name" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="number" id="full-name" value="{{$user->client_number}}" class="input-text" placeholder="Client Number" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="mail" id="your-email" value="{{$user->mail_id}}" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                        </div>
                    </div>
                    <div class="form-row-total">
                        <div class="form-row">
                            <input type="text" name="address" id="password" value="{{$user->client_address}}" class="input-text" placeholder="Address" required>
                        </div>
                        <div class="form-row">
                            <input type="password" name="pass" value="{{$user->client_password}}" id="comfirm-password" class="input-text" placeholder="Password" required>
                        </div>
                        <div class="form-row">
                            <input type="text" name="ac_number" value="{{$user->account_number}}"  class="input-text" placeholder="Account Number" required>
                        </div>
                    </div>
                    <div class="form-row-total">
                        <div class="form-row">
                            <select class="form-select" aria-label="Default select example"  class="input-text" name="v_type"required>
                                <option selected disabled >Identification Number</option>
                                <option value="NID"  @if($user->verification_type == 'NID') selected @endif>NID Number</option>
                                <option value="Passport"  @if($user->verification_type == 'Passport') selected @endif>Passport Number</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="text" name="v_number" value="{{$user->verification_number}}"  class="input-text" placeholder="Identification Number" required >
                        </div>

                        <div class="form-row">
                            <input type="file" name="image" value="{{$user->client_picture}}" placeholder="upload Image">
                            <img src="{{asset('/assets/images/user_images/'.$user->client_picture)}}" class="image" style="width: 50%">
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

