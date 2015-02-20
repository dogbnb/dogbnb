<ul class="bxslider">
    @if(!$user->location->images->isEmpty())
        @foreach ($user->location->images as $image)
            <li><img src="{{{ $image->img_name }}}" class="img-responsive" /></li>
        @endforeach
    @endif
</ul>

<div id="bx-pager" class="center-block text-center">
    @if(!$user->location->images->isEmpty())
        @for($i = 0; $i < $user->location->images->count(); $i++)
            <a data-slide-index="{{ $i }}" href=""><img src="{{{ $user->location->images[$i]->img_name }}}" /></a>
        @endfor
    @endif
</div>
