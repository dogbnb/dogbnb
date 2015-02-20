
<!-- Pricing Table -->
<div class="section">
	<div class="container">
		<h2><i class="fa fa-lg fa-home"></i> Available Hosts</h2>
    	
			@foreach ($users as $user)
			
			<div class="pricing-plan">
				<div class="text-center">
					<h2 align="center" class="pricing-plan-title">{{{ $user->nickname }}}</h2>
				</div>

				<div class="row">
				<p id="user{{$user->id}}">

					<div class="col-md-4">
						@if($user->location->images)
							<img class="img-circle text-wrap" src="{{{ $user->location->images->first()->img_name }}}" >
						@endif
					</div>
					
					<div class="col-md-8">
						<ul class="pricing-plan-features">
							<li><strong>Name: </strong> {{{ $user->fname }}} {{{ $user->lname }}}</li>
							<li><strong>Max Size Allowed: </strong>{{{ $user->size_allowed }}}</li>
							<li><strong>Description: </strong>{{{ $user->location->description }}}</li>
						</ul>
				</p>
					</div>	
						<div align="right"><a href="/users/{{$user->id}}" class="btn">See Profile</a></div>
				</div>
			</div>
			@endforeach
	</div>
</div>


				
					