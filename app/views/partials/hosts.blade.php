
<!-- Pricing Table -->
	    <div class="section">
	    	<div class="container">
	    		<h2>Available Hosts</h2>
	        	<!-- <div class="row"> -->
	        		<!-- Pricing Plans Wrapper -->
	        		<!-- <div class="pricing-wrapper col-md-12"> -->
        				<!-- Pricing Plan -->
						<div class="pricing-plan">
							<!-- Pricing Plan Ribbon -->
							<!-- <div class="ribbon-wrapper">
								<div class="price-ribbon ribbon-red">Popular</div>
							</div> -->
						@foreach ($users as $user)
						<div>
							<h2 align="center" class="pricing-plan-title">{{{ $user->nickname }}}</h2>
							<div align="center" class="pricing-plan-price"><img src="/uploads/House1.jpg" align="center" class="img-circle"></div>
							<br>
							<!-- Pricing Plan Features -->
						<p id="user{{$user->id}}">
							<ul class="pricing-plan-features">
								<li><strong>Name: </strong> {{{ $user->fname }}} {{{ $user->lname }}}</li>
								<li><strong>Max Size Allowed: </strong>{{{ $user->size_allowed }}}</li>
								<li><strong>Description: </strong>{{{ $user->location->description }}}</li>
							</ul>
						</p>
							<div align="right"><a href="{{$user->id}}" class="btn">Reserve Now</a></div>
						</div>
						@endforeach
			</div>
		</div>
						

	
