<?php

declare(strict_types=1);

namespace Corona\Core\Interfaces;

/**
 * Interface for BasePage.
 *
 * This is the contract for build the pages
 *
 * @version 1.0.0
 * 
 * @since 1.0.0
 */

interface BasePageInterface
{

    /**
     * This function should load all fields from the ACF to the class
     */
    public function initialize();

    /**
     * @return self 
     * It will return the class with the page contents
     * e.g. $class->acf_form
     */
    public function all();

    /**
     * This function should return the $this->content
     * @return array
     */
    public function get();

    /**
     * This function should populate the $this->content with all records found.
     * @param string $field
     * @return self
     */
    public function find(string $field);

    /**
     * This function will populate the $this->content with the first record found.
     * @param string $field
     * @return self
     * 
     * It will return only the first element found
     */
    public function first(string $field);

    /**
     * @return string with a JSON format.
     */
    public function json(): string;

    /**
     * This function should register the ACF on the wordpress as array
     * NOTE: It must be exported from ACF, in the menu tool,  as PHP array 
     * It should be done using ACF function like below:
     * 
     * acf_add_local_field_group( $field_group )	Adds a field group to the local cache
     * acf_add_local_field( $field )	            Adds a field to the local cache
     * acf_get_local_field( $key )	                Get a local field
     * acf_remove_local_field( $key )	            Remove a local field
     * 
     * Its documentation is on the https://www.advancedcustomfields.com/resources/register-fields-via-php/
     */
    public static function register_custom_fields();
}
