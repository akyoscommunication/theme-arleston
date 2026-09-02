<section class="s-banner {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <x-title_text name="s-banner" :title="$title" :description="$description"/>

    <div class="s-banner-list">
      @if(count($elements) <= 4)
        <div class="s-banner-list-wrapper">
          @foreach($elements as $element)
            @if($element['link'])
              <a href="{{ $element['link']['url'] }}" target="_blank" animation-stagger>
                @endif
                <x-media :media="$element['image']"/>
                @if($element['link'])
              </a>
            @endif
          @endforeach
        </div>
      @else
        <x-slider
          name="banner"
          :per="5"
          :perMd="4"
          :perSm="3"
          :perXs="2"
          :modules="['navigation']"
          :extra="['spaceBetween' => 24]"
        >
          @foreach($elements as $element)
            <div class="swiper-slide" animation-stagger>
              @if($element['link'])
                <a href="{{ $element['link']['url'] }}" target="_blank">
                  @endif
                  <x-media :media="$element['image']"/>
                  @if($element['link'])
                </a>
              @endif
            </div>
          @endforeach
        </x-slider>
      @endif
    </div>
  </div>
</section>
