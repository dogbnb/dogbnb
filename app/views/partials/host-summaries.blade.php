       <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Available Hosts</h1>
                    </div>
                </div>
            </div>
        </div>
        
{{-- Begin foreach loop through locations --}}
    @foreach ($locations as $location)
        <div class="section">
            <div class="container">
                <div class="row service-wrapper-row">
                    <div class="col-sm-4">
                        @if(!$location->images->isEmpty())
                            <div class="service-image">
                                <img src="{{{ $location->images->first()->img_name }}}" alt="Host Image">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-8">
                        <h3>{{{ $location->user->nickname }}}</h3>
                        <p>{{{ $location->description }}}</p>
                    </div>
                    <div align="right"><a href="/users/{{$location->user_id}}" class="btn btn-success">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach