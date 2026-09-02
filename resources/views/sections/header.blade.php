<header class="header-wrap {{ get_field('change_color', get_the_ID()) ? 'scrolled' : null  }}">
  <div class="container header">
    <div class="header-brand">
      <a href="{!! home_url() !!}">
        <x-image variant="logo" :lg="$options['logo']"/>
      </a>
    </div>

    <div class="header-nav">
      <nav class="header-nav__nav" animation-stagger-single="0.7">
        @menu('main_navigation')
      </nav>

      <div class="header-nav__mobile">
        <div id="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="header-nav__mobile--last-link">
          @menu('main_navigation')
        </div>

        <div class="header-nav__mobile_menu">
          @menu('mobile_navigation')
        </div>
      </div>
    </div>
  </div>
</header>
