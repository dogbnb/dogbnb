
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
					<p id="user{{$user->id}}">
						<div class="pricing-plan-price">

							@if($user->location->images)
								@foreach ($user->location->images as $image)
									<img src="{{{ $image->img_name }}}" >
								@endforeach
							@endif

						</div>
						
						<br>
						<!-- Pricing Plan Features -->
						<ul class="pricing-plan-features">
							<li><strong>Name: </strong> {{{ $user->fname }}} {{{ $user->lname }}}</li>
							<li><strong>Max Size Allowed: </strong>{{{ $user->size_allowed }}}</li>
							<li><strong>Description: </strong>{{{ $user->location->description }}}</li>
						</ul>
					</p>
						<div align="right"><a href="/users/{{$user->id}}" class="btn">See Profile</a></div>
					</div>
					<br>
				@endforeach

				</div>
	</div>
</div>
					