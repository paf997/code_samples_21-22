<?php

namespace Flynt\Components\GridAction;

use Flynt\FieldVariables;
use Timber\Post;

use function Flynt\ComponentLogServer\consoleDebug;

add_filter('Flynt/addComponentData?name=GridAction', function ($data) {

    $data['style'] = FieldVariables\buildStyle($data);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'gridAction',
        'label' => 'Grid: Action',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Style', 'flynt'),
                'name' => 'gridStyle',
                'type' => 'radio',
                'other_choice' => 0,
                'save_other_choice' => 0,
                'layout' => 'horizontal',
                'choices' => [
                    'vertical' => __('Vertical Title Bar', 'flynt'),
                    'horizontal' => __('Horizontal Title Bar', 'flynt')
                ],
                'default_value' => 'vertical',
                'wrapper' =>  [
                    'width' => '100',
                ],
                'wpml_cf_preferences' => '3'
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'delay' => 1,
                'wpml_cf_preferences' => '3'
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add',
                'wpml_cf_preferences' => '3',
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'required' => 1,
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                        'mime_types' => 'jpg,jpeg,png',
                        'wrapper' => [
                            'width' => 25
                        ],
                        'wpml_cf_preferences' => '3'
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 25
                        ],
                        'wpml_cf_preferences' => '3'
                    ],
                    [
                        'label' => __('URL', 'flynt'),
                        'name' => 'url',
                        'type' => 'url',
                        'wrapper' => [
                            'width' => 25
                        ],
                        'wpml_cf_preferences' => '3'
                    ],
                    [
                        'label' => __('Page', 'flynt'),
                        'name' => 'pageLink',
                        'type' => 'page_link',
                        'instructions' => 'This will be used if both URL and Page have values',
                        'wrapper' => [
                            'width' => 25
                        ],
                        'wpml_cf_preferences' => '3'
                    ],



                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getCommon(),
                    [
                        'label' => __('Columns', 'flynt'),
                        'name' => 'columns',
                        'type' => 'number',
                        'default_value' => 3,
                        'min' => 1,
                        'max' => 4,
                        'step' => 1
                    ]
                ]
            ]
        ]
    ];
}
