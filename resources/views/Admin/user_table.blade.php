@extends('layouts.structure')
@section('title','Edit User Profile')
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<h2 class="text-center"> Users Record</h2>
<div style="background-color: white;" id="user_data">
	
		<table class="table table-striped table-hover table-bordered table-responsive">
		<tr>
			<th>S no.</th>
			<th>User Id</th>
			<th>Profile</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>	
		</tr>

		@foreach($dat as $sno=>$user)
		<tr>
			<td>{{$sno+1}}</td>
			<td>{{$user->u_id}}</td>
			<td><img src="{{ asset('Uploads/Profile_pic/' . $user->profile_pic) }}" style="height: 100px; width: 100px;"></td>
			<td>{{$user->first_name}}</td>
			<td>{{$user->last_name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
			<td><a href="{{url('edit_record',['id'=>$user->u_id])}}"><button type="button" class="btn btn-warning btn-xs btn-fill">Edit &#9998;</button></a>
			<button class="deleteUser btn btn-xs btn-fill btn-danger" data-id="{{ $user->u_id }}" data-token="{{ csrf_token() }}" >Delete</button></td>
		</tr>
		@endforeach
	</table>
</div>
<div class="text-center">{{$dat->links()}}</div>
<script>
	$(function(){ //document ready

		$("body").on('click','.deleteUser', function(){ //dynamic tag/html 
			
			var id = $(this).data("id");
			if(confirm('Are You Sure To Want To Delete User?'))
			{
		        $.ajax({
		            url: "delete_record/"+id,
		            method:"get"
		        });
		    }

	        $('#user_data').load(" #user_data");
	    });
	});
		



</script>
@endsection

