<?php
return [
    'router' => [
        'routes' => [
            'test-image' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/test-image-i',
                    'defaults' => [
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'test-image',
                    ],
                ],
            ],
        ]
    ]
];
