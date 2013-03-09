<?php
/**
 * DiWrapper
 *
 * This source file is part of the DiWrapper package
 *
 * @package    DiWrapper
 * @subpackage Example
 * @license    New BSD License
 * @copyright  Copyright (c) 2013, aimfeld
 */

namespace DiWrapper\Example;

/**
 * @package    DiWrapper
 * @subpackage Example
 */
class ServiceF
{
    /**
     * @param ExampleInterface $example
     */
    public function __construct(ExampleInterface $example)
    {
        // ExampleImplementor is injected since it is a type preference for ExampleInterface
        $this->example = $example;
    }

    /**
     * Create runtime objects using a DiFactory which injects RuntimeB's dependencies.
     */
    public function serviceMethod()
    {
        $this->example->example();
    }
}