@extends('layouts.app')

@section('content')
	
	<!-- header-section-ends -->
	
	
		</div>
		<!-- content-section-starts-here -->
		<div class="container">
			<div class="main-content">
				@component('component.online-strip')
				@endcomponent
				<div class="products-grid">
				<header>
					<h3 class="head text-center">Latest Products</h3>
				</header>
					<div class="col-md-4 product simpleCart_shelfItem text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<a href="single.html"><img src="images/p1.jpg" alt="" /></a>
						<div class="mask">
							<a href="single.html">Quick View</a>
						</div>
						<a class="product_name" href="single.html">Sed ut perspiciatis</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$329</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
						<a href="single.html"><img src="images/p2.jpg" alt="" /></a>
						<div class="mask">
							<a href="single.html">Quick View</a>
						</div>
						<a class="product_name" href="single.html">great explorer</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$599.8</span></a></p>
					</div>
					<div class="col-md-4 product simpleCart_shelfItem text-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
						<a href="single.html"><img src="images/p3.jpg" alt="" /></a>
						<div class="mask">
							<a href="single.html">Quick View</a>
						</div>
						<a class="product_name" href="single.html">similique sunt</a>
						<p><a class="item_add" href="#"><i></i> <span class="item_price">$359.6</span></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		
		
	

   
@endsection
