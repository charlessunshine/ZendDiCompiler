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
class ServiceE
{
    /**
     * @param ExampleDiFactory $diFactory
     */
    public function __construct(ExampleDiFactory $diFactory)
    {
        $this->diFactory = $diFactory;
    }

    /**
     * Create runtime objects using a DiFactory which injects RuntimeB's dependencies.
     */
    public function serviceMethod()
    {
        $runtimeB1 = $this->diFactory->createRuntimeB('one', 1);
        $runtimeB2 = $this->diFactory->createRuntimeB('two', 2);
    }
}