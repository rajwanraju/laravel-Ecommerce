
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="{{url('/')}}"><img src="{{asset('public/frontEnd/images/')}}/logo.png"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			
				<div class="row" style="padding-top:20px ;">
				<table>
					<form action="{{url('/search')}}" method="post">

<tr>
<td>&nbsp;&nbsp;</td>
<td> <input type="text" name="search_product" placeholder="Product Name"></td>
<input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
<td >&nbsp;&nbsp;<input type="submit"  name="Submit" value="Search"></td>
</tr>


					</form>
				</table>
			
		</div>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="{{url('/login')}}" class="use1" data-toggle="modal"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="https://www.facebook.com/rajwan.raju"></a></li>
				<li><a class="twi" href="https://twitter.com/RajwanUllah"></a></li>
				<li><a class="insta" href="https://www.instagram.com/rajwanraju/?hl=en"></a></li>
				<li><a class="you" href="https://www.youtube.com/channel/UC-HG-ObHKwGVKEANTQjXYqQ"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>