<footer id="footer">
    <div class="container">
        <div class="footer-logo">
            <a href="{{ home_url('/') }}">
                {{ Helper::image(get_field('logo', 'option'), 'full', array('width' => get_field('logo_width', 'option'), 'alt' => 'THE FORD PLANTATION')) }}
            </a>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="tbl">
                    @if(!empty(get_field('social_nav', 'option')))
                    <ul class="social-networks">
                        @foreach(get_field('social_nav', 'option') as $social)
                            @if($social['social_link'])
                            <li>
                                <a href="{{ $social['social_link'] }}" class="icon-{{ str_replace(' ', '-', strtolower($social['social_name'])) }}" target="_blank">
                                    <span class="sr-only">{{ $social['social_name'] }}</span>
                                </a>
                            </li>
                            @endif
                        @endforeach
                         <li class="f-logo">
                            <a href="{{ get_field('ai_link', 'option') }}">
                                {{ Helper::image(get_field('ai_logo', 'option'), 'full', array('width' => get_field('ai_logo_width', 'option'), 'alt' => 'Audubon International')) }}
                            </a>
                        </li>
                    </ul>
                    @endif

                    <?php
                      wp_nav_menu (array(
                        'theme_location' => 'footer_nav',
                        'container_class' => 'tfg',
                        'menu_id' => '',
                        'menu_class' => 'footer-nav'
                      ));
                    ?>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="tbl">
                    <div class="search-holder">
                        {{ get_search_form() }}
                    </div>
                    <div class="tfg">
                        <div class="re-snipe-block">
                            <div class="img-wrap">
                                {{ Helper::image(get_field('eho_logo', 'option'), 'full', array('width' => get_field('eho_logo_width', 'option'))) }}
                            </div>
                            <div class="text-wrap">
                                <address class="hidden visible-xs">
                                    {{get_field('copyright', 'option')}} 
                                    <br>{{get_field('address', 'option')}} {{get_field('phone', 'option')}}<br>
                                </address>
                                <p>{{get_field('eho_paragraph_copy', 'option')}} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>