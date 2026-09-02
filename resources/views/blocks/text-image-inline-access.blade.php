<section class="s-text-image-inline {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <div class="s-text-image-inline-wrapper s-text-image-inline-wrapper--text {{ $position }}" animation-stagger>
      <x-title_text name="s-text-image-inline" :title="$title" :description="$content"/>

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
    @if($images && isset($images[0]))
      <div class="s-text-image-inline-wrapper" animation-stagger>
        <x-media :media="$images[0]"/>
      </div>
    @endif
    @if($images && isset($images[1]))
      <div class="s-text-image-inline-wrapper" animation-stagger>
        <x-media :media="$images[1]"/>
      </div>
    @endif
  </div>
</section>
