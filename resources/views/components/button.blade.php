<a {{ $attributes->merge(['class' => 'btn'.($appearance ? " btn--$appearance" : null)]) }}>
  <span>{!! $slot !!}</span>
</a>
