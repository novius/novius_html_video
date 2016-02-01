<?php

\Nos\I18n::current_dictionary(array('novius_html_video::common'));

return array(
    'fields' => array(
        'media'    => array(
            'label'            => __('Video'),
            'renderer'         => '\Nos\Renderer_Media',
            'renderer_options' => array(
                'mode'           => 'all',
                'inputFileThumb' => array(
                    'title' => 'Media Centre Video',
                    'texts' => array(
                        'add'            => 'Pick a video',
                        'edit'           => 'Pick another video',
                        'delete'         => 'No video',
                        'wrongExtension' => 'This extension is not allowed.',
                    ),
                ),
            )
        ),
        'width'    => array(
            'label' => __('Width'),
            'form'  => array(
                'type' => 'text'
            )

        ),
        'height'   => array(
            'label' => __('Height'),
            'form'  => array(
                'type' => 'text'
            )
        ),

        'align'    => array(
            'label' => __('Align'),
            'form'  => array(
                'type'    => 'select',
                'options' => array(
                    'left'   => __('Left'),
                    'center' => __('Centered'),
                    'right'  => __('Right'),
                )
            )
        ),
        'autoplay' => array(
            'label' => __('Autoplay'),
            'form'  => array(
                'type'  => 'checkbox',
                'value' => 1,
                'empty' => 0
            ),
        ),
        'mute'     => array(
            'label' => __('Mute ?'),
            'form'  => array(
                'type'  => 'checkbox',
                'value' => 1,
                'empty' => 0
            ),
        ),
        'loop'     => array(
            'label' => __('Play in loop ?'),
            'form'  => array(
                'type'  => 'checkbox',
                'value' => 1,
                'empty' => 0
            ),
        ),
        'poster'   => array(
            'label'            => 'Poster',
            'renderer'         => 'Nos\Media\Renderer_Media',
            'renderer_options' => array(
                'inputFileThumb' => array(
                    'title' => __('Poster'),
                ),
            ),
        ),
    ),
);