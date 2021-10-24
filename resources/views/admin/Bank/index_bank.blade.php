@extends('admin.layout.master')
@section('active_bank_bar','active')
@section('content')

<div class="row">
    <div class="col-md-10">
        <table class="table table-responsive table-striped table-bordered">
            <tr>
                <th>SL</th>
                <th>Client Name</th>
                <th>Account number</th>
                <th>Client Number</th>
                <th>Client Address</th>
                <th>Verification Type</th>
                <th>Verification Number</th>
                <th>Client Picture</th>
                <th>Mail Id</th>
                <th>option</th>
            </tr>
            @forelse($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->client_name}}</td>
                    <td>{{ $user->account_number}}</td>
                    <td>{{ $user->client_number}}</td>
                    <td>{{ $user->client_address}}</td>
                    <td>{{ $user->verification_type}}</td>
                    <td>{{ $user->verification_number}}</td>
                    <td><img src="{{asset('assets/images/user_images/'.$user->client_picture)}}"  style="width: 50%"></td>
                    <td>{{ $user->mail_id}}</td>
{{--                    <td>{{ $user->client_password}}</td>--}}
                    {{--        <td>{{ $user->image }}</td>--}}
                    <td>
                        <a class="btn btn-info"  href="{{route('bank.edit',$user->id)}}"><i class=""> Edit </i> </a><span>
            {!! Form::open(['class'=>'form-sample','method'=>'DELETE','route' =>['bank.destroy',$user->id]]) !!}
            <button type="submit" class="btn btn-warning"> Delete </button></span>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan = 10>No data Found !!</td>
                </tr>
        </table>
        @endforelse
    </div>
</div>

@endsection
