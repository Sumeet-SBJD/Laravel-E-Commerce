<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<style type="text/css">
		.is-invalid
		{
			border: 1px solid black;
			
		}
		.invalid
		{
			color:red;
		}
	</style>
</head>
<body>
	<h2 class="text-center"> Resgister Form</h2>
<div class="container form-responsive">
	@if ($message = Session::get('success'))
        <div class="col-md-8 alert alert-success alert-block">
        	<button type="button" class="close" data-dismiss="alert">×</button>
     		<strong>{{ $message }}</strong>
         </div>
    @endif
	<form action="{{url('pass')}}" method="post" class="form-group">
		@csrf
		
		<div class="row">
			<div class="col-md-6 form-group">
				<lable>Enter First Name: </lable>
				<input type="text" name="firstname" class="form-control {{ $errors->has('firstname')?'is-invalid':'' }}" value="{{ old('firstname') }}">
				@error('firstname')
                    <strong class="invalid">{{ $message }}</strong>
                @enderror
			</div>

			<div class="col-md-6 form-group">
				Enter Last Name: <input type="text" name="lastname" class="form-control {{ $errors->has('lastname')?'is-invalid':'' }}" value="{{ old('lastname') }}">
				@error('lastname')
                   <strong class="invalid">{{ $message }}</strong>
                    @enderror
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 form-group">
				<lable>Enter Email:</lable> 
				<input type="text" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" value="{{ old('email') }}">
				@error('email')
                    <strong class="invalid">{{ $message }}</strong>
                    @enderror
			</div>
					
		</div>

		<div class="row">
			<div class="col-md-12 form-group">
				Enter Address: <textarea name="address" class="form-control {{ $errors->has('address')?'is-invalid':'' }}" value="{{ old('address') }}"></textarea>
				@error('address')
                   <strong class="invalid">{{ $message }}</strong>
                    @enderror
			</div>
			
		</div>

			<div class="row">
				<div class="col-md-6 form-group">
			    	Enter Mobile No. : <input type="text" name="phone" class="form-control {{ $errors->has('phone')?'is-invalid':'' }}" value="{{ old('phone') }}">
			    	@error('phone')
                    <strong class="invalid">{{ $message }}</strong>
                    @enderror
				</div>
				<div class="col-md-6 form-group">
					Select Gender:<br> <input type="radio" name="gender" value="female" class="{{ $errors->has('email')?'is-invalid':'' }} form-check-input" id="materialUnchecked" {{ old('gender') == 'female'?'checked':'' }} >Fe-male&nbsp;&nbsp;

					<input type="radio" name="gender" value="male" class="{{ $errors->has('gender')?'is-invalid':'' }} form-check-input"  {{ old('gender') == 'male'?'checked':'' }}>Male<br>
					@error('gender')
                   <strong class="invalid">{{ $message }}</strong>
                    @enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 form-group">
				Select Qualification: <input type="text" name="qualification" class="form-control {{ $errors->has('qualification')?'is-invalid':'' }}" value="{{ old('qualification') }}">
				</div>
				@error('qualification')
                <strong class="invalid">{{ $message }}</strong>
                @enderror
			</div><br>
			<input type="submit" class="btn btn-primary">
	</div>
		
	</form>

</div>

</body>
</html>