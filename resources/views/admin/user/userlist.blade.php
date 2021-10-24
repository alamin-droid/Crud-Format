@extends('admin.layout.master')
@section('active_user_bar' ,'active')
@section('content')
    <br>
<br>
<br>
    <div class="container-fluid">
        {{--search Box--}}
        {!! Form::open(['class'=>'form-sample','method'=>'POST','route' =>'user.search']) !!}
{{--        <div class="input-group ">--}}
{{--            <input type="text" class="form-control rounded"  placeholder=""  />--}}
{{--            <button type="submit"   class="btn btn-primary">search</button>--}}
{{--        </div>--}}

<div class="text-center">
        <div class="input-group ">
            <input type="search" class="form-control rounded" name="input" placeholder="Need a Search ?" aria-label="Search"
                   aria-describedby="search-addon" />
            <button type="submit" name="alamin" class="btn btn-outline-secondary">search</button>
        </div>
</div>
        {!! Form::close() !!}
        {{--End Search box--}}
{{--        search reult--}}


{{--        end search result--}}


<div class="row">
    <div class="col-md-3">.</div>
<div class="card">
<div class = "col-md-10">
<table class="table table-bordered table-striped table-responsive text-center">
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Contact</th>
        <th>image</th>
        <th>Department</th>
        <th>Option</th>

    </tr>
    @forelse($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $user->user_name}}</td>
        <td>{{ $user->user_contact }}</td>
{{--        <td>{{ $user->image }}</td>--}}
        <th>
            <img src="{{asset('/assets/images/user_images/'.$user->image)}}" class="user_image" style="width: 50%">
        </th>
        <td>{{ $user->dpt_name}}</td>
        <td>
            <a class="btn btn-info"  href="{{route('user.edit',$user->id)}}"><i class=""> Edit </i> </a><span>
            {!! Form::open(['class'=>'form-sample','method'=>'DELETE','route' =>['user.destroy',$user->id]]) !!}
            <button type="submit" class="btn btn-warning"> Delete </button></span>
            {!! Form::close() !!}
        </td>
    </tr>
    @empty
    <tr>
        <td colspan = 5>No data Found !!</td>
    </tr>
    @endforelse
</table>


<div>
 </div>
</div>
</div>
</div>
    </div>
@endsection
