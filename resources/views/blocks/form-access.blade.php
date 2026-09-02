@php $shortcode = "[forminator_form id=".$form."]" @endphp

<section class="s-form {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $content_position }}">
    <div class="s-form-wrapper">
      <x-media :media="$image"/>
      <div class="s-form-infos">
        <div class="s-form-infos__address">
          {!! $options['address'] !!}
        </div>
        <div class="s-form-infos-coordinates">
          <a href="tel:+33{{ $options['phone'] }}">@icon('phone') {!! $options['phone'] !!}</a>
          <a href="mailto:{{ $options['email'] }}">@icon('email') {!! $options['email'] !!}</a>
        </div>
      </div>

      <x-socials/>

      <div class="s-form__description_short" animation-mask>
        {!! $description_short !!}
      </div>
    </div>

    <span class="s-form-wrapper"></span>
    <div class="s-form-wrapper">
      {!! $shortcode !!}
    </div>
  </div>
</section>
