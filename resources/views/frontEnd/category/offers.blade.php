 @extends('frontEnd.master')

 @section('mainContent')
 

<div class="wthree-offers">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Today's Offers & Gift Cards </h3>
			<div class="w3ls-add-grids w3agile-add-products">
				<a href="{{url('/category') }}"> 
					<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
					<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
				</a>
			</div> 
			<div class="offer-card-row">
				<div class="col-md-4 offer-card-grids">
					<h4>20% Cashback </h4>
					<p>Shop Using Gift Cards Get 20% Cashback</p>
					<a href="{{url('/category') }}">Shop Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4 offer-card-grids">
					<h4>Earn $20</h4>
					<p>Refer a friend and earn $20 in Smart bazaar!</p>
					<a href="{{url('/category') }}">Shop Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-4 offer-card-grids">
					<h4>10% Cashback </h4>
					<p>Shop Using Credit Card Get 10% Cashback </p>
					<a href="{{url('/category') }}">Shop Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
				</div>	
				<div class="clearfix"> </div>
			</div>	
			<div class="offer-bottom"> 
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info2">
						<h4>Special Gift Cards</h4> 
						<h6>More brands, more ways to shop. <br> Check out these ideal gifts!</h6>
					</div>
				</div>
				<div class="col-md-6 offer-bottom-grids">
					<div class="offer-bottom-grids-info">
						<h4>Flat $10 Discount</h4> 
						<h6>The best Shopping Offer <br> On Fashion Store</h6>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	


 @endsection