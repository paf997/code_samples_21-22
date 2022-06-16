<?php

namespace Flynt\Components\NavigationFooter;

use Flynt\Utils\Options;
use Timber\Menu;
use Flynt\Shortcodes;

use function Flynt\ComponentLogServer\consoleDebug;

add_action('init', function () {
    register_nav_menus([
        'navigation_footer' => __('Navigation Footer', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationFooter', function ($data) {

    $globalOptions = Options::getTranslatable('GlobalOptions');

    $data['lbl_subscribeHtml'] = $data['subscribeHtml_' . ICL_LANGUAGE_CODE];
    $data['lbl_contactHtml'] = $data['contactHtml_' . ICL_LANGUAGE_CODE];

    $data['lbl_contactUs'] = $globalOptions['contactUs_' . ICL_LANGUAGE_CODE];
    $data['lbl_quickLinks'] = $globalOptions['quickLinks_' . ICL_LANGUAGE_CODE];

    $data['maxLevel'] = 0;
    $data['menu'] = new Menu('navigation_footer');

    return $data;
});

Options::addTranslatable('NavigationFooter', [
    [
        'label' => __('Contact EN', 'flynt'),
        'name' => 'contactHtml_en',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' =>
        '<div>Ottawa Choral Society</div>
            <div>Box 14017, RPO Glebe</div>
            <div>Ottawa ON K1S 3T2</div>
            <div>(613) 725-2560</div>
            <div><a href="mailto:info@ottawachoralsociety.com">info@ottawachoralsociety.com</a></div>',
        'wrapper' => [
            'width' => 50
        ]
        // 'default_value' => '©&nbsp;[year] [sitetitle]'
    ],
    [
        'label' => __('Contact FR', 'flynt'),
        'name' => 'contactHtml_fr',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' =>
        '<div>Société Chorale d\'Ottawa</div>
            <div>Box 14017, RPO Glebe</div>
            <div>Ottawa ON K1S 3T2</div>
            <div>(613) 725-2560</div>
            <div><a href="mailto:info@ottawachoralsociety.com">info@ottawachoralsociety.com</a></div>',
        'wrapper' => [
            'width' => 50
        ]
    ],
    [
        'label' => __('Icons', 'flynt'),
        'name' => 'icons',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' =>
        '<a href="https://www.youtube.com/channel/UCENJ4GNMCPlzgdo5fCiIF1g"><i class="fab fa-youtube-square fa-2x"></i><a/>
        <a href="https://www.facebook.com/OttawaChoralSociety"><i class="fab fa-facebook-square fa-2x"></i><a/>
        <a href="https://twitter.com/ottawachoral"><i class="fab fa-twitter-square fa-2x"></i><a/>'
    ],
    [
        'label' => __('Mailing List Title EN', 'flynt'),
        'name' => 'subscribeHtml_en',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' => '<strong>Join our mailing list!</strong><p>Sign up for the OCS mailing list and be the first to know about news and updates</p>',
        'wrapper' => [
            'width' => 50
        ]
    ],
    [
        'label' => __('Mailing List Title FR', 'flynt'),
        'name' => 'subscribeHtml_fr',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' => '<strong>Inscrivez-vous à notre liste de diffusion!</strong><p>Inscrivez-vous à la liste de diffusion de la SCO et soyez les premiers à être informés des nouvelles et des mises à jour</p>',
        'wrapper' => [
            'width' => 50
        ]
    ],
    Shortcodes\getShortcodeReference(),
]);
