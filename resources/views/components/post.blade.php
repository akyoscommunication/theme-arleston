@php
  $terms = get_the_terms($post->ID, 'category');

  $date = date('d/m/Y', strtotime($post->post_date));
@endphp

<article {{ $attributes->merge(['class' => 'c-post']) }} >
  <a class="c-post__permalink" href="{{ get_permalink($post->ID) }}">
  </a>
  <div class="c-post-image">
    <x-image :lg="get_post_thumbnail_id($post->ID)"/>
  </div>
  <div class="c-post-content">
    <div class="c-post-content-header">
      <div class="c-post-content-header__buttons">
        @foreach($terms as $term)
          <x-button href="{{ get_term_link($term->term_id) }}" appearance="outlined-square">
            {!! $term->name !!}
          </x-button>
        @endforeach
      </div>
      <div class="c-post-content-header__date">
        {!! $date !!}
      </div>
    </div>
    <div class="c-post-content-body">
      <x-title tag="h3">{!! $post->post_title !!}</x-title>
      <div class="c-post-content-body__excerpt">
        {!! $post->post_excerpt !!}
      </div>
    </div>
  </div>
</article>
