<section class="s-gallery {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <x-title_text name="s-gallery" :title="$title" :description="$description"/>

    <div class="s-gallery-grid">
      @foreach($gallery as $item)
        @include('akyos-access::partials.gallery-media', ['media' => $item])
      @endforeach
    </div>

    <div class="s-gallery-swiper">
      <x-slider
        name="gallery"
        :per="4"
        :perMd="3"
        :perSm="2"
        :perXs="1"
        :modules="['navigation']"
        :extra="['spaceBetween' => 20]"
      >
        @foreach($gallery as $item)
          <div class="swiper-slide">
            @include('akyos-access::partials.gallery-media', ['media' => $item])
          </div>
        @endforeach
      </x-slider>
    </div>
  </div>
</section>
