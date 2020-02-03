@extends('layouts.structure')
@section('title','Edit User Profile')
@section('content')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                @foreach($data as $re)
                                    <form method="post" action="{{url('update')}}" enctype="multipart/form-data" class="form-group">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label class="text-dark"><b>User Id * </b></label>
                                                <input type="text" name="id" class="form-control" value="{{$re->u_id}}" disabled>

                                                <input type="hidden" name="id" class="form-control" value="{{$re->u_id}}">
                                                
                                            </div>
                                        </div>
                                    </div> 
                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="username" class="form-control {{ $errors->has('username')?'is-invalid':'' }}" value="{{$re->first_name}}">
                                                @error('username')
                                                    <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control {{ $errors->has('lastname')?'is-invalid':'' }}" placeholder="Andrew" value="{{$re->last_name}}">
                                                @error('lastname')
                                                    <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="text" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" value="{{$re->email}}">
                                                @error('email')
                                                <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control {{ $errors->has('address')?'is-invalid':'' }}" placeholder="Home Address" value="{{$re->address}}">
                                                @error('address')
                                                    <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control {{ $errors->has('city')?'is-invalid':'' }}" placeholder="City" value="{{$re->city}}">
                                                @error('city')
                                                    <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control {{ $errors->has('country')?'is-invalid':'' }}" placeholder="Country" value="{{$re->country}}">
                                                @error('country')
                                                    <h6 class="text-center invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" name="zip_code" class="form-control {{ $errors->has('zip_code')?'is-invalid':'' }}" placeholder="ZIP Code" value="{{$re->zip_code}}">
                                                @error('zip_code')
                                                    <h6 class="text-right invalid">{{ $message }}</h6>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Submit Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        
@endsection