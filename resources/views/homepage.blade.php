
@extends('layouts.Frontent.structure')

@section('title','Fashion Sales | Home')


<!-- <<<<<<<<<<<<>>>>>>>>>>>> Hero section <<<<<<<<<<<<<<>>>>>>>>>>>>>> -->

@section('hero_section')

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

		<section class="hero-section set-bg" data-setbg="img/bg.jpg">
			<div class="hero-slider owl-carousel">
				<div class="hs-item">
					<div class="hs-left"><img src="img/slider-img.png" style="height: 906px; width: 530px;" alt=""></div>
					<div class="hs-right">
						<div class="hs-content">
							<div class="price">from &#8377; 299.90</div>
							<h2><span><script>document.write(new Date().getFullYear());</script></span> <br>summer collection</h2>
							<a href="" class="site-btn">Shop NOW!</a>
						</div>	
					</div>
				</div>
				<div class="hs-item">
					<div class="hs-left"><img src="img/slider-img.png" style="height: 906px; width: 530px;" alt=""></div>
					<div class="hs-right">
						<div class="hs-content">
							<div class="price">from &#8377; 299.90</div>
							<h2><span>2020</span> <br>summer collection</h2>
							<a href="" class="site-btn">Shop NOW!</a>
						</div>	
					</div>
				</div>
			</div>
		</section>
		
@endsection

<!--  <<<<<<<<<<<>>>>>>>> Hero section end <<<<<<<<<<<<>>>>>>>>>>>> -->


<!-- <<<<<<<<<<<<<<>>>>>>>>>>>>>> Product section starts <<<<<<<<<<<<>>>>>>>>>>>> -->

@section('product_section')

	<section class="product-section spad">
		<h2 class="text-center">Our Products</h2>
		<br />
		<div class="container">

			<ul class="product-filter controls">
				<li class="control" data-filter=".new">New arrivals</li>
				<li class="control" data-filter="all">Recommended</li>
				<li class="control" data-filter=".best">Best sellers</li>
			</ul>
			<div class="row hover" id="product-filter">
				@foreach($products as $product)
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="{{ asset('Uploads/Products_img/' . $product->product_image) }}"  style="height: 362px;" alt="">
						</figure>
						<div class="product-info">
							<h6>{{$product->product_title}}</h6>
							<p>&#8377; {{$product->price}}</p>
							<form action="{{url('/Add_to_cart')}}" method="POST">
								@csrf
								<input type="hidden" name="productId" value="{{ $product->id }}">
								<input type="hidden" name="qty" value="1">
								<button class="site-btn btn-line" onclick="cartInc()">ADD TO CART</button>
							</form>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			
			<ul class="product-filter">
				<li><div>{{$products->links()}}</div></li>
			</ul>
		</div>
				
	</section>
	<script type="text/javascript">
		function cartInc()
		{
			var value = parseInt(document.getElementById('cartvalue').text);
    		++value;
    		document.getElementById('cartvalue').text = value;
		}
	</script>
@endsection
<!-- <<<<<<<<<<<>>>>>>>>>>>>>> Product section end <<<<<<<<<<>>>>>>>>>>>>>> -->