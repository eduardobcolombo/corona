<?php

declare(strict_types=1);
/**
 * @package Corona Custom Post Types
 */

/*
 * Plugin Name: Corona Custom Post Types
 * Description: This plugin is used to manage the Corona
 * Version: 1.0.0
 * Author: Eduardo B Colombo
 * Author URI: https://github.com/eduardobcolombo
*/

namespace Corona;

defined('ABSPATH') or die('You cannot access this plugin. Make sure that the ABSPATH is defined.');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once  dirname(__FILE__) . '/vendor/autoload.php';
}

use Corona\Core\Corona;

$corona = new Corona();
