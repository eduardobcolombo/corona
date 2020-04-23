<?php

declare(strict_types=1);
/**
 * OptionsPage.
 *
 * Add Options Page to set data for templates 
 * Add the menus and submenus
 * @version 1.0.0
 * 
 * @since 1.0.0
 */

namespace Corona\Core\Pages;

class OptionsPage
{

  public function __construct()
  {

    if (function_exists('acf_add_options_page')) {

      $mainParent = acf_add_options_page(array(
        'page_title'   => 'Corona',
        'menu_title'  => 'Corona',
        'menu_slug'   => 'corona-manage',
        'capability'  => 'edit_posts',
        'icon_url'    => 'dashicons-admin-home',
        'redirect'    => false
      ));

      // acf_add_options_sub_page(array(
      //   'page_title'   => 'New Submenu',
      //   'menu_title'  => 'New Submenu',
      //   'parent_slug' => $mainParent['menu_slug'],
      // ));

    }
  }
}
