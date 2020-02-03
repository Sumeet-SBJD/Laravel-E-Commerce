@extends('layouts.structure')
@section('title','Products List')
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>


<h2 class="text-center"> Products Record</h2>
<button type="button" class="btn btn-success btn-xs">&#x2713; Approve All</button>
<button type="button" class="btn btn-danger btn-xs">&#x2715; Dis-Approve All</button>

<div style="background-color: white; margin-top: 15px;" id="product_table">
<table class="table table-responsive table-bordered table-hover table-striped">

	<tr>
		<th>Status of Products</th>
		<th>Product Id</th>
		<th>Product Image</th>
		<th>Product Title</th>
		<th>Product Description</th>
		<th>Product Price</th>
		<th>Action</th>
	</tr>
	@foreach($products as $Product)
	<tr>
		<td style="width: 30px;"><button class="btn btn-success btn-xs btn-fill" id="check">&#x2713;</button></td>

		<td>{{$Product->id}}</td>

		<td><img src="{{asset('Uploads/Products_img/' . $Product->product_image)}}" style="height: 60px; width: 40px;"></td>
		<td>{{$Product->product_title}}</td>
		<td>{!!$Product->product_desc!!}</td>
		<td>&#8377; {{$Product->price}}</td>
		<td><a href="{{url('edit_product',['id'=>$Product->id])}}"><button type="button" class="btn btn-warning btn-xs btn-fill">Edit &#9998;</button></a>
			<button class="deleteProduct btn btn-xs btn-fill btn-danger" data-id="{{ $Product->id }}" data-token="{{ csrf_token() }}" >Delete</button></td>
	</tr>
	@endforeach
</table>
</div>
<div class="text-center" style="display: block;">{{$products->links()}}</div>

<!-- deleting product using ajax -->
<script>
	$(function(){ //document ready

		$("body").on('click','.deleteProduct', function(){ //dynamic tag/html 
			
			var id = $(this).data("id");

			if(confirm('Are You Sure To Want To Delete Product?'))
			{
		        $.ajax({
		            url: "delete_product/"+id,
		            method:"get"
		        });
		    }

	        $('#product_table').load(" #product_table");
	       
	    });
	});
</script>
@endsection
