<?php

declare(strict_types=1);

namespace Corona\Core;

/**
 * Base.
 *
 * This is the base class
 *
 * @version 1.0.0
 * 
 * @since 1.0.0
 */

use Exception;

abstract class Base
{
    protected $content = [];

    function __construct()
    {
        $this->initialize();
    }

    /**
     * this function should me overided with the set fields 
     */
    public function initialize()
    {
        // this function should me overided with the set fields 
    }

    /**
     * This function should return the Base class itself with all records
     * @return self
     */
    public function all()
    {
        $this->initialize();
        return $this;
    }

    /**
     * This function should return the collection of values as Array
     * @return array
     */
    public function get()
    {
        return $this->content;
    }

    /**
     * This function will populate the $this->content with all records found.
     * @param string $field
     * @return self
     */
    public function find(string $field)
    {
        $this->initialize();
        $content = $this;
        $tmpFound = [];
        $this->recursive_walk($content, $field, $tmpFound);
        $this->content = $tmpFound;
        return $this;
    }

    /**
     * This function will walk through the array recursively to find the record
     * @param array $content
     * @param string $field
     * @param pointer $tmpResult
     * @param bool $onlyTheFirstResult
     */
    public function recursive_walk($content, $field, &$tmpResult, $onlyTheFirstResult = false) {
        foreach ($content as $k=>$v) {
            if ($onlyTheFirstResult && count($tmpResult) > 0) {
                return ;
            }
            if ($k === $field) {
                $tmpResult[][$k] = $v;
                continue;
            }
            if (is_array($v)) {
                $this->recursive_walk($v, $field, $tmpResult, $onlyTheFirstResult);
            }
        }
    }
    
    /**
     * This function will populate the $this->content with the first record found.
     * @param string $field
     * @return self
     * 
     * It will return only the first element found
     */
    public function first(string $field)
    {
        $this->initialize();
        $content = $this;
        $tmpFound = [];
        $this->recursive_walk($content, $field, $tmpFound, true);
        $this->content = $tmpFound;

        return $this;
    }

    /**
     * This function should return the collection of values as JSON
     * @return string // JSON format
     */
    public function json(): string
    {
        if ($this->content != null) {
            return json_encode($this->content);
        }
        return json_encode($this);
    }
}
