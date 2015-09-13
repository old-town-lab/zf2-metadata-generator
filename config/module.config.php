<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator;

use OldTown\Zf2MetadataGenerator\Controller\GeneratorController;

return [
    'console' => [
        'router' => [
            'routes' => [
                'generatePhpStormMeta' => [
                    'options' => [
                        'route'    => 'Zf2MetadataGenerator generate',
                        'defaults' => [
                            'controller' => GeneratorController::class,
                            'action'     => 'generate'
                        ]
                    ],
                ]
            ]
        ]
    ],
    'controllers' => [
        'invokables' => [
            GeneratorController::class => GeneratorController::class
        ]
    ]
];