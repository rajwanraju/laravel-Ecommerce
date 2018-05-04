 @extends('frontEnd.master')
 @section('title')
   Category
 @endsection

 @section('mainContent')


	
	<div class="men-wear">
	<div class="container">
	
		<div class="single-pro">
		@foreach($publishedCategoryProducts as $publishedCategoryProduct)	
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset ($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-front">
						<img src="{{asset ($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="{{url('/product-details/'.$publishedCategoryProduct->id)}}" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="{{url('/product-details/'.$publishedCategoryProduct->id)}}">{{$publishedCategoryProduct->productName}}</a></h4>
						<div class="info-product-price">
							<span class="item_price">BDT.{{$publishedCategoryProduct->productPrice}}</span>
							
						</div>
						<a href="{{url('/cart/add')}}" class="btn btn-warning item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			@endforeach
			
			<div class="clearfix"></div>
		</div>
		
	</div>
</div>	




 @endsection