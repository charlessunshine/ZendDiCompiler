<?php

/**
 * Override the DI configuration in your project config.
 *
 * For an example config, see example.config.php. For info on the structure of
 * the 'instance' and the 'preference' array, see Zend\Di documentation.
 */
return array(
    // Definition and instance configuration
    'di' => array(
        // Path for writing the generated service locator class. Must be writable!
        'write_path' => './data',
        // Directories that will be code-scanned
        'scan_directories' => array(
            // e.g. 'vendor/provider/module/src',
        ),
        // Definitions
        'definition' => array(
        ),
        // Instance configuration
        'instance' => array(
            // Type preferences for abstract classes and interfaces.
            'preference' => array(
                // e.g. 'DiWrapper\Example\ExampleInterface' => 'DiWrapper\Example\ExampleImplementor',
            ),
            /* e.g.
            'DiWrapper\Example\ServiceB' => array('parameters' => array(
                'diParam' => 'Hello',
            )),*/
         ),
    ),
);
