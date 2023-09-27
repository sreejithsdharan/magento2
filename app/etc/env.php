<?php
return [
    'cache' => [
        'graphql' => [
            'id_salt' => 'TZaOPsR3rRw0XcreLRT17w6F6ZQAwMYk'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '7b0_'
            ],
            'page_cache' => [
                'id_prefix' => '7b0_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'backend' => [
        'frontName' => 'admin_r69686'
    ],
    'crypt' => [
        'key' => '01c0e1c01920744d540f7f35e3e8e6e1'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'ae631018_dev',
                'username' => 'ae631018_dev',
                'password' => 'RapperSpouseLapsedDrains',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'c2bb2b798e.nxcli.io'
    ],
    'install' => [
        'date' => 'Wed, 27 Sep 2023 12:56:42 +0000'
    ]
];
