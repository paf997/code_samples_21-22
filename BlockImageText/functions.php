<?php

namespace Flynt\Components\BlockImageText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockImageText',
        'label' => 'Block: Image Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image Position', 'flynt'),
                'name' => 'imagePosition',
                'type' => 'button_group',
                'choices' => [
                    'imageLeft' => '<i class=\'dashicons dashicons-align-left\' title=\'Image on the left\'></i>',
                    'imageRight' => '<i class=\'dashicons dashicons-align-right\' title=\'Image on the right\'></i>'
                ]
            ],
            [
                'label' => __('Image Width', 'flynt'),
                'name' => 'imageWidth',
                'type' => 'button_group',
                'default_value' => 'imageHalf',
                'choices' => [
                    'imageQuarter' => 'Quarter',
                    'imageThird' => 'Third',
                    'imageHalf' => 'Half'
                ],
            ],
            [
                'label' => __('Image Vertical Align', 'flynt'),
                'name' => 'imageVerticalAlign',
                'type' => 'button_group',
                'choices' => [
                    'imageTop' => '<i class=\'dashicons dashicons-arrow-up-alt\' title=\'Image at the top\'></i>',
                    'imageMiddle' => '<i class=\'dashicons dashicons-align-center\' title=\'Image in the middle\'></i>',
                    'imageBottom' => '<i class=\'dashicons dashicons-arrow-down-alt\' title=\'Image at the bottom\'></i>'
                ],
                'default_value' => 'imageTop',
            ],
            [
                'label' => __('Image Shape', 'flynt'),
                'name' => 'imageShape',
                'type' => 'button_group',
                'default_value' => 'imageOriginal',
                'choices' => [
                    'imageOriginal' => 'Original',
                    'imageSquare' => 'Square',
                ],
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 1,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
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
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
