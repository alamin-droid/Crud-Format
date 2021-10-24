@extends('admin.layout.master')
@section('active_employee_bar' ,'active')
@section('content')
<div class="row">
<div class = "col-md-3"></div>
<div class="card">
<div class = "col-md-6">
<table class="table table-responsive">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Department</th>
        <th>Option</th>

    </tr>
    @forelse($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $user->user_name}}</td>
        <td>{{ $user->user_contact }}</td>
        <td>{{ $user->dpt_name}}</td>
        <td>
            <a class="btn btn-default" href="{{route('employee.edit',$user->id)}}">Edit</a>
            {!! Form::open(['class'=>'form-sample','method'=>'DELETE','route' =>['employee.destroy',$user->id]]) !!}
            <button type="submit" class="btn btn-success"> Delete </button>
            {!! Form::close() !!}
        </td>


    </tr>
    @empty
    <tr>
        <td colspan = 4>No data Found !!</td>
    </tr>
    @endforelse
</table>
<div class = "col-md-3"></div>


 </div>
</div>
</div>
</div>
@endsection
