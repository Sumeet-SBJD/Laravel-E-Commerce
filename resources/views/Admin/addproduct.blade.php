
@extends('layouts.structure')
@section('title','Add Products')
	@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

		<!-- Post Name -->
        <form method="post" action="{{url('product')}}" enctype="multipart/form-data" class="form-group">
        @csrf
        <div class="row col-md-12">
            <div class="col-md-12">
                    <label>Title</label>
            	<input type="text" name="product_title" placeholder="Post-Tittle" class="form-control" style="border-color:#C0C0C0;"><br>
                    @error('product_title')
                    <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert" style="margin-top: 15px; margin-right: 10px;">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @enderror
            </div>
        </div>
        
        <!-- Post Name -->
        <div class="row col-md-12">
            
            <!-- Post Image -->
            <div class="col-md-6">
                    <label>Featured Image</label>
                    <input type="file" name="product_image" class="form-control"><br>
            </div>
            <!-- Post Image -->

            <!-- Product price -->
            <div class="col-md-6">
                    <label>Product Price(INR)</label>
                    <input type="text" name="product_price" placeholder="&#8377; 000.00" class="form-control"><br>
            </div>

        </div>

        <!-- edit post -->
        <div class="row col-md-12">
            <div class="col-md-12">

                    <label>Description</label>
            	<textarea id="mytextarea" name="product_desc" class="form-control" style="height: 200px;">Hello, World!</textarea>
            </div>
            
            <div class="col-md-12">
            	<input type="submit" value="Post"  class="btn btn-md" style="background-color:#9669D7;color:white;border:none;margin-top: 20px; padding:10px 20px 10px 20px ">
            </div>
        </div>
        </form>
        </div>
	@endsection