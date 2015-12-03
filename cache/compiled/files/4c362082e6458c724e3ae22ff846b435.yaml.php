<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/pmc2/user/plugins/admin/blueprints.yaml',
    'modified' => 1449026137,
    'data' => [
        'name' => 'Admin Panel',
        'version' => '1.0.0-rc.7',
        'description' => 'Adds an advanced administration panel to manage your site',
        'icon' => 'empire',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-admin',
        'keywords' => 'admin, plugin, manager, panel',
        'bugs' => 'https://github.com/getgrav/grav-plugin-admin/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-admin/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email',
            2 => 'login'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'Basics' => [
                    'type' => 'section',
                    'title' => 'Basics',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'Administrator path',
                    'size' => 'medium',
                    'placeholder' => 'Default route for administrator (relative to base)',
                    'help' => 'If you want to change the URL for the administrator, you can provide a path here'
                ],
                'theme' => [
                    'type' => 'hidden',
                    'label' => 'Theme',
                    'default' => 'grav'
                ],
                'edit_mode' => [
                    'type' => 'select',
                    'label' => 'Edit mode',
                    'size' => 'small',
                    'default' => 'normal',
                    'options' => [
                        'normal' => 'Normal',
                        'expert' => 'Expert'
                    ],
                    'help' => 'Auto will use blueprint if available, if none found, it will use "Expert" mode.'
                ],
                'google_fonts' => [
                    'type' => 'toggle',
                    'label' => 'Use Google Fonts',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Use Google custom fonts.  Disable this to use Helvetica. Useful when using Cyrillic and other languages with unsupported characters.'
                ],
                'show_beta_msg' => [
                    'type' => 'hidden'
                ],
                'show_github_msg' => [
                    'type' => 'toggle',
                    'label' => 'Show GitHub Link',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Show the beta warning message on the dashboard'
                ],
                'enable_auto_updates_check' => [
                    'type' => 'toggle',
                    'label' => 'Automatically check for updates',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Shows an informative message, in the admin panel, when an update is available.'
                ],
                'session.timeout' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'Session Timeout',
                    'help' => 'Sets the session timeout in seconds',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'warnings.delete_page' => [
                    'type' => 'toggle',
                    'label' => 'Warn on page delete',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Ask the user confirmation when deleting a page'
                ],
                'Popularity' => [
                    'type' => 'section',
                    'title' => 'Popularity',
                    'underline' => true
                ],
                'popularity.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Visitor tracking',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'Enable the visitors stats collecting feature'
                ],
                'dashboard.days_of_stats' => [
                    'type' => 'text',
                    'label' => 'Days of stats',
                    'size' => 'x-small',
                    'default' => 7,
                    'help' => 'Keep stats for the specified number of days, then drop them',
                    'validate' => [
                        'type' => 'int'
                    ]
                ],
                'popularity.ignore' => [
                    'type' => 'array',
                    'label' => 'Ignore',
                    'size' => 'large',
                    'help' => 'URLs to ignore',
                    'default' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ],
                'popularity.history.daily' => [
                    'type' => 'hidden',
                    'label' => 'Daily history',
                    'default' => 30
                ],
                'popularity.history.monthly' => [
                    'type' => 'hidden',
                    'label' => 'Monthly history',
                    'default' => 12
                ],
                'popularity.history.visitors' => [
                    'type' => 'hidden',
                    'label' => 'Visitors history',
                    'default' => 20
                ]
            ]
        ]
    ]
];
