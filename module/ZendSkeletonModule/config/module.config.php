<?php
return array(
    /*'controllers' => array(
        'invokables' => array(
            'ZendSkeletonModule\Controller\Hello' => 'ZendSkeletonModule\Controller\HelloController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'ZendSkeletonModule-hello' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/module-specific-root',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'ZendSkeletonModule\Controller',
                        'controller'    => 'ZendSkeletonModule\Controller\Hello',
                        'action'        => 'world',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),*/
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index', 
        'template_path_stack' => array(
            'zend-skeleton-module' => __DIR__ . '/../view',
        ),
        'template_map' => array(
            'zend-skeleton-module/hello/world' => __DIR__ . '/../view/zend-skeleton-module/hello/world.phtml',
        ),
        'controller_map' => array(
            'ZendSkeletonModule' => true,
        ),
    ),  
    'ZendSkeletonModule' => array(
        'type'    => 'Literal',
        'options' => array(
            'route'    => 'ZendSkeletonModule',
            'defaults' => array(
                'controller'    => 'ZendSkeletonModule\Controller\Hello',
                'action'        => 'world',
            ),
        ),
        'may_terminate' => true,
        'child_routes' => array(
            'default' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/[:controller[/:action]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                    ),
                ),
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'ZendSkeletonModule-hello-world' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/hello/world',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        //'__NAMESPACE__' => 'ZendSkeletonModule\Controller',
                        'controller'    => 'ZendSkeletonModule\Controller\Hello',
                        'action'        => 'world',
                    ),
                ),
            ),
        ),
    ),        
    'controllers' => array(
        'invokables' => array(
            'ZendSkeletonModule\Controller\Hello' => 'ZendSkeletonModule\Controller\HelloController',
            // Do similar for each other controller in your module
        ),
    ),
    
);
