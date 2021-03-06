<?php

/**
 * Override the DI configuration in your project config.
 *
 * For an example config, see example.config.php. For info on the structure of
 * the 'instance' and the 'preference' array, see Zend\Di documentation.
 */
return array(
    // ZendDiCompiler configuration
    'zendDiCompiler' => array(
        // Path for writing the generated service locator class. Must be writable!
        'writePath' => './data',
        // Directories that will be code-scanned
        'scanDirectories' => array(
            // e.g. 'vendor/provider/module/src',
        ),
        // Names of class constructor parameters which will be passed the $params array
        // when calling ZendDiCompiler::get($class, $params)
        // disable like this: 'params' => false
        'paramArrayNames' => array(
            'zdcParams' => true,
        ),
    ),
    // ZF2 DI definition and instance configuration used by ZendDiCompiler
    'di' => array(
        // Definitions
        'definition' => array(
        ),
        // Instance configuration
        'instance' => array(
            // Type preferences for abstract classes and interfaces.
            'preference' => array(
                // e.g. 'ZendDiCompiler\Example\ExampleInterface' => 'ZendDiCompiler\Example\ExampleImplementor',
            ),
            /* e.g.
            'ZendDiCompiler\Example\ServiceB' => array('parameters' => array(
                'diParam' => 'Hello',
            )),*/
         ),
    ),
);
