<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/pmc2/user/plugins/login/login.yaml',
    'modified' => 1449026135,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => false,
        'redirect' => NULL,
        'rememberme' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-rememberme'
        ],
        'oauth' => [
            'enabled' => false,
            'user' => [
                'autocreate' => false,
                'access' => [
                    'site' => [
                        'login' => true
                    ]
                ]
            ],
            'providers' => [
                'Facebook' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'Google' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'GitHub' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ],
                'Twitter' => [
                    'enabled' => false,
                    'credentials' => [
                        'key' => NULL,
                        'secret' => NULL
                    ]
                ]
            ]
        ],
        'user_registration' => [
            'enabled' => true,
            'fields' => [
                0 => 'username',
                1 => 'password',
                2 => 'email',
                3 => 'fullname',
                4 => 'title',
                5 => 'access',
                6 => 'state'
            ]
        ]
    ]
];
