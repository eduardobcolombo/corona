<?php

declare(strict_types=1);

namespace Corona\Core\Pages;

/**
 * FrontPage.
 *
 * This is the main class that the Front-End developers will be using.
 *
 * @version 1.0.0
 * 
 * @since 1.0.0
 */

use Corona\Core\Base;
use Corona\Core\Interfaces\BasePageInterface;

class Home extends Base implements BasePageInterface
{

    public $banner;

    public function initialize()
    {
        $this->banner = get_field('corona_banner_repeater', 'options');
        $this->content = $this;
    }

    static function register_custom_fields()
    {
        if (function_exists('add_action')) {
            add_action(
                'init',
                function () {
                    if (function_exists('acf_add_local_field_group')) :

                        acf_add_local_field_group(array(
                            'key' => 'group_5e9611a3c3b16',
                            'title' => 'Corona Home',
                            'fields' => array(
                                array(
                                    'key' => 'field_5e9611aef8ea4',
                                    'label' => 'Corona Banner Repeater',
                                    'name' => 'corona_banner_repeater',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        'layout_5e9611c1899ff' => array(
                                            'key' => 'layout_5e9611c1899ff',
                                            'name' => 'corona_banner',
                                            'label' => 'Corona Banner',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                array(
                                                    'key' => 'field_5e9611edf8ea5',
                                                    'label' => 'Image',
                                                    'name' => 'image_corona_banner',
                                                    'type' => 'image',
                                                    'instructions' => '',
                                                    'required' => 1,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'return_format' => 'array',
                                                    'preview_size' => 'medium',
                                                    'library' => 'all',
                                                    'min_width' => '',
                                                    'min_height' => '',
                                                    'min_size' => '',
                                                    'max_width' => '',
                                                    'max_height' => '',
                                                    'max_size' => '',
                                                    'mime_types' => '',
                                                ),
                                                array(
                                                    'key' => 'field_5e96120af8ea6',
                                                    'label' => 'Title',
                                                    'name' => 'title_corona_banner',
                                                    'type' => 'text',
                                                    'instructions' => '',
                                                    'required' => 1,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'default_value' => '',
                                                    'placeholder' => '',
                                                    'prepend' => '',
                                                    'append' => '',
                                                    'maxlength' => '',
                                                ),
                                            ),
                                            'min' => '1',
                                            'max' => '',
                                        ),
                                    ),
                                    'button_label' => 'Add Row',
                                    'min' => '',
                                    'max' => '',
                                ),
                            ),
                            'location' => array(
                                array(
                                    array(
                                        'param' => 'options_page',
                                        'operator' => '==',
                                        'value' => 'corona-manage',
                                    ),
                                ),
                            ),
                            'menu_order' => 0,
                            'position' => 'normal',
                            'style' => 'default',
                            'label_placement' => 'top',
                            'instruction_placement' => 'label',
                            'hide_on_screen' => '',
                            'active' => true,
                            'description' => '',
                        ));

                    endif;
                }
            );
        }
    }
}
