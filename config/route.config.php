<?php
return [
    'router' => [
        'routes' => [
            'get-test-image' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/test-image',
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
