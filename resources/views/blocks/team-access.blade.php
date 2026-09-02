<section class="s-team {{ $classes }}" style="{{ $styles }}">
  <div class="s-team__background {{ $classes }}"></div>
  <div class="container">
    <x-title_text name="s-team" :title="$title" :description="$description"/>
    <div class="s-team-list">
      @if(count($teams) <= 4)
        <div class="s-team-list-wrapper">
          @foreach($teams as $team)
            <x-card
              :title="[
                  'tag' => 'h3',
                  'value' => $team['name']
                  ]"
              :content="$team['job']"
              :image="$team['image']"
            />
          @endforeach
        </div>
      @else
        <x-slider
          name="team"
          :per="4"
          :perMd="3"
          :perSm="2"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 20]"
        >
          @foreach($teams as $team)
            <div class="swiper-slide">
              <x-card
                :title="[
                  'tag' => 'h3',
                  'value' => $team['name']
                  ]"
                :content="$team['job']"
                :image="$team['image']"
              />
            </div>
          @endforeach
        </x-slider>
      @endif
    </div>
  </div>
</section>
