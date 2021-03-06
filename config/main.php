<?php
return array(
    'componentsRootMap' => array(
        'models'      => '/models',
        'controllers' => '/controllers',
        'views'       => '/views/views',
        'layouts'     => '/views/layouts',
        'snippets'    => '/views/snippets',
        'images'      => '/web/assets/imgs',
        'js'          => '/web/js',
        'css'         => '/web/css'
    ),
    'defaultLayout'     => 'main',
    'routeMap'          => array(
        'cli'    => array(
            '--test' => array(
                'ctrl' => array('Cli', 'actionTest'),
            ),
        ),
        'get'    => array(
            '/'  => array(
                'ctrl' => array('Test', 'actionDefault'),
                'auth' => false,
            ),
            '.*' => array(
                'ctrl' => array('System', 'actionPage404'),
                'auth' => false,
            ),
        ),
        'post'   => array(
            '.*' => array(
                'ctrl' => array('System', 'actionPage404'),
                'auth' => false,
            ),
        ),
        'put'    => array(
            '.*' => array(
                'ctrl' => array('System', 'actionPage404'),
                'auth' => false,
            ),
        ),
        'delete' => array(
            '.*' => array(
                'ctrl' => array('System', 'actionPage404'),
                'auth' => false,
            ),
        ),
    ),
//    'db'                => array(
//        'host'     => '',
//        'username' => '',
//        'password' => '',
//        'dbname'   => ''
//    ),
);
