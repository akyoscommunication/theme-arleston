<section class="s-text-image {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $position }}">
    <div class="s-text-image-wrapper {{ $images ? null : 's-text-image-wrapper--full' }}">
      <x-title_text name="s-text-image" :title="$title" :description="$content"/>

      @if($button && $button['link'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>
    @if($images)
      <div class="s-text-image-wrapper">
        @foreach($images as $image)
          <x-media :media="$image" animation-wipe animation-stagger/>
        @endforeach
      </div>
    @endif
  </div>
</section>
