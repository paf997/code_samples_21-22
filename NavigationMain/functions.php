<?php

namespace Flynt\Components\NavigationMain;

//use Timber;
use Timber\Timber;
use Timber\Menu;
use Timber\Post;
use Flynt\Utils\Asset;
use Flynt\Utils\Options;

use function Flynt\ComponentLogServer\consoleDebug;

add_action('init', function () {
    register_nav_menus([
        'navigation_main' => __('Navigation Main', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationMain', function ($data) {
    $globalOptions = Options::getTranslatable('GlobalOptions');
    $context = Timber::get_context();
    $context['post'] = new Post();

    $data['fdn_transparent_overlap_menu'] = $context['post']->fdn_transparent_overlap_menu;

    $data['menu'] = new Menu('navigation_main');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationMain/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];
    $data['donateId'] = $globalOptions['donateId'];

    return $data;
});
