<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'ImgManLibrary\Service\ServiceFactory',
            'ImgManLibrary\Storage\Adapter\Mongo\MongoDbAbstractServiceFactory',
            'ImgManLibrary\Storage\Adapter\Mongo\MongoCollectionAbstractServiceFactory',
        ],
        'factories' => [
            'ImgMan\PluginManager' => 'ImgManLibrary\Operation\OperationHelperManagerFactory',
        ],
        'invokables' =>[
            // ImgMan adapter
            'ImgMan\Adapter\Imagick'  => 'ImgManLibrary\Core\Adapter\ImagickAdapter',
        ],
    ],
    'imgManServices' => [
        'ImgMan\Service\Test' => [
            'adapter'       => 'ImgMan\Adapter\Imagick',
            'storage'       => 'ImgMan\Storage\Mongo',
            'pluginManager' => 'ImgMan\PluginManager',
            'renditions' => [
                'thumb' => [
                    'resize' => [
                        'width'  => 200,
                        'height' => 200
                    ]
                ],
                'thumbMaxi' => [
                    'resize' => [
                        'width'  => 1500,
                        'height' => 500
                    ],
                    'format' => [
                        'format' => 'jpeg'
                    ],
                    'compression' => [
                        'compression' => \Imagick::COMPRESSION_JPEG2000,
                        'compressionQuality' => 45
                    ]

                ]
            ],
        ],
    ],
    'imgManMongodb' => [
        'MongoDb' => [
            'database' => 'imgManStorage'
        ]
    ],
    'imgManMongoCollection' => [
        'ImgMan\Storage\Mongo' => [
            'collection' => 'image_test',
            'database' => 'MongoDb'
        ]
    ],
    'shared' => [
        'ImgMan\PluginManager'   => false
    ],
];