<header id="header">
    <div class="container">
        <div class="logo">
            <a href="{{ home_url('/') }}">
                {{ Helper::image(get_field('logo', 'option'), 'full', array('width' => get_field('logo_width', 'option'), 'alt' => 'THE FORD PLANTATION', 'class' => 'hidden-xs')) }}
                {{ Helper::image(get_field('mobile_logo', 'option'), 'full', array('width' => get_field('mobile_logo_width', 'option'), 'alt' => 'THE FORD PLANTATION', 'class' => 'hidden visible-xs')) }}
            </a>
        </div>
        <a href="#" class="nav-opener"><span><em><i class="sr-only">Menu</i>Menu</em></span></a>
        <div class="navigation">
            <div class="side-nav-logo hidden visible-xs">
                <a href="{{ home_url('/') }}">
                    {{ Helper::image(get_field('mobile_logo', 'option'), 'full', array('width' => get_field('mobile_logo_width', 'option'), 'alt' => 'THE FORD PLANTATION')) }}
                </a>
            </div>
            <div class="holder">
                <nav id="nav" class="row">
                    <div class="col-sm-5">
                        <?php wp_nav_menu (array(
                            'theme_location' => 'left_main_nav',
                            'container' => false,
                            'container_class' => '',
                            'menu_id' => '',
                            'menu_class' => 'main-nav',
                            'walker'         => new WPSE_KEW_Sublevel_Walker
                          )); ?>
                    </div>
                    <div class="col-sm-4 col-sm-offset-3 col-md-5 col-md-offset-2 text-right">
                        <?php wp_nav_menu (array(
                            'theme_location' => 'right_main_nav',
                            'container' => false,
                            'container_class' => '',
                            'menu_id' => '',
                            'menu_class' => 'main-nav',
                            'walker'         => new WPSE_KEW_Sublevel_Walker
                          )); ?>
                    </div>
                </nav>
                <div class="login-wrap">
                    <a href="#" class="login">{{ _e( 'Member login' ) }}</a>
                </div>
                <div class="search-holder">
                    {{ get_search_form() }}
                </div>
            </div>
        </div>
        <div class="rail-slider">
            <a href="#" class="rail-opener">
                <span class="opener-wrap"><span>{{ get_field('connnect_header', 'option') }}</span></span>
            </a>
            <div class="holder">
                @if(!empty(get_field('connnect_ctas', 'option')))
                <ul>
                    @foreach(get_field('connnect_ctas', 'option') as $cta)
                        <li>
                            <a href="{{ $cta['button_url'] }}" class="{{ $cta['button_icon'] }}">
                                <span>{{ $cta['button_label'] }}</span>
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ get_field('google_map_url', 'option') }}" class="map">
                        {{ Helper::image(get_field('google_map_image', 'option'), 'full') }}
                        </a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </div>
</header>