<?php

declare(strict_types=1);

namespace Corona\Core;

/**
 * Base.
 *
 * This is the main class that the Front-End developers will be using.
 *
 * @version 1.0.0
 * 
 * @since 1.0.0
 */

use Corona\Core\Pages\OptionsPage;
use Corona\Core\Pages\Home;

class Corona extends Base
{

    public $Home;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->add_filters();
        $this->add_actions();
    }

    /**
     * Executes all the necessary filters for this application.
     *
     * @return void
     */
    public function add_filters()
    {
    }

    /**
     * Executes all necessary actions for this application.
     *
     * @return void
     */
    public function add_actions()
    {
        if (function_exists('add_action')) {
            add_action(
                'init',
                function () {
                    // Initializes Options Page
                    new OptionsPage();
                    $this->Home = new Home();
                }
            );
        }
    }
}
