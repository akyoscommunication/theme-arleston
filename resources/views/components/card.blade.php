<article class="c-card" animation-stagger>
  @if(isset($url) && $url)
    <a href="{{ $url['url'] }}">
  @else
    <div>
  @endif

      <x-media :media="$image"/>

      <div class="c-card-body">
        <x-title :tag="$title['tag']">{!! $title['value'] !!}</x-title>
        @if(!empty($content))
          <div class="c-card-body__text">
            {!! $content !!}
          </div>
        @endif
      </div>

  @if(isset($url) && $url)
    </a>
  @else
    </div>
  @endif
</article>
