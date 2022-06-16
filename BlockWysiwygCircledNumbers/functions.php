<?php

namespace Flynt\Components\BlockWysiwygCircledNumbers;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwygCircledNumbers',
        'label' => 'Block: Wysiwyg Circled Numbers',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text Alignment', 'flynt'),
                'name' => 'textAlignment',
                'type' => 'button_group',
                'choices' => [
                    'textLeft' => '<i class=\'dashicons dashicons-editor-alignleft\' title=\'Align text left\'></i>',
                    'textCenter' => '<i class=\'dashicons dashicons-editor-aligncenter\' title=\'Align text center\'></i>'
                ]
            ],
            [
                'label' => __('Content Max-Width', 'flynt'),
                'name' => 'width',
                'type' => 'button_group',
                'choices' => [
                    'small' => __('Small width', 'flynt'),
                    'large' => __('Large width', 'flynt')
                ]
            ],
            FieldVariables\getColour(100, 'Text Colour', 'colour', '#ffffff'),
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ],
            [
                'label' => __('Circle Number 1', 'flynt'),
                'name' => 'icon_one',
                'type' => 'text',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Circle Number 2', 'flynt'),
                'name' => 'icon_two',
                'type' => 'text',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Circle Number 3', 'flynt'),
                'name' => 'icon_three',
                'type' => 'text',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
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
