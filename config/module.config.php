<?php
$config = [
    'controllers'           => [
        'invokables' => [
            'ImgManModule\Controller\Index' => 'ImgManModule\Controller\IndexController'
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];

$routeConfig   = include __DIR__ . '/route.config.php';

return array_merge($config, $routeConfig);