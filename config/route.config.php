<?php
return [
    'router' => [
        'routes' => [
            'dispatch-image' => [
                'type'    => 'Segment',
                'options' => [
                    'route'    => '/dispatch-image',
                    'defaults' => [
                        '__NAMESPACE__' => 'ImgManModule\Controller',
                        'controller'    => 'Index',
                        'action'        => 'dispatch-image',
                    ],
                ],
            ],
        ]
    ]
];
