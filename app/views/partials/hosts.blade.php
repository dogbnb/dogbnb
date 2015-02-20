
<!-- Pricing Table -->
<div class="section">
	<div class="container">
		<h2><i class="fa fa-lg fa-home"></i> Available Hosts</h2>
			@foreach ($locations as $location)
			
			<div class="pricing-plan">
				<div class="text-center">
					<h2 align="center" class="pricing-plan-title">{{{ $location->user->nickname }}}</h2>
				</div>

				<div class="row">
				<p id="user{{$location->user_id}}">

					<div class="col-md-4">
						@if(!$location->images->isEmpty())
							<img class="img-circle text-wrap" src="{{{ $location->images->first()->img_name }}}" >
						@endif
					</div>
											{{ $users->links() }}

					<div class="col-md-8">
						<ul class="pricing-plan-features">
							<li><strong>Name: </strong> {{{ $location->user->fname }}} {{{ $location->user->lname }}}</li>
							<li><strong>Max Size Allowed: </strong>{{{ $location->user->size_allowed }}}</li>
							<li><strong>Description: </strong>{{{ $location->description }}}</li>
						</ul>
				</p>
					</div>	
						<div align="right"><a href="/users/{{$location->user_id}}" class="btn">See Profile</a></div>
				</div>
			</div>
			@endforeach

			<div>
				{{ $locations->appends(array('search' => Input::get('search')))->links() }}
			</div>
	</div>
</div>


				
					