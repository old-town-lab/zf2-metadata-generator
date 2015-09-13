<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator\PhpUnit\TestData;

return [
    'modules' => [
        'OldTown\\Zf2MetadataGenerator'
    ],
    'module_listener_options' => [
        'module_paths' => [
            'OldTown\\Zf2MetadataGenerator' => TestPaths::getApplicationConfig()
        ]
    ]
];