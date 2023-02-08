<?php

function zetblogtheme_wp_nav_menu(){
    wp_nav_menu( array(
        'theme_location'    => 'menu-1',
        'depth'             => 2,
        'container'         => 'div',
        'menu_class'        => 'navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
}