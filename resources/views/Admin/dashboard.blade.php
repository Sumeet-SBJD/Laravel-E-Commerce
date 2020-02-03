


@include('layouts.structure')
	@section('title','Dashboard')
	@if($x = Session::has('email'))
		@section('content') 

		@endsection

		@else
			@include('Admin.admin_login')
@endif
