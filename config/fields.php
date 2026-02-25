<?php

return [
    [
        'name' => 'tab_api',
        'type' => 'FieldsetTabOpen',
        'label' => 'API Einstellungen',
        'tags' => 'api',
        'icon' => 'Tag',
    ],
    [
        'name' => 'tab_api_END',
        'type' => 'FieldsetClose',
        'label' => 'Close an open fieldset',
        'tags' => 'api',
        'icon' => 'Tag',
    ],
    [
        'name' => 'api_name',
        'type' => 'Text',
        'label' => 'API Name',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 50,
        'placeholder' => 'Individueller API Name',
    ],
    [
        'name' => 'api_url',
        'type' => 'Text',
        'label' => 'API URL',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 25,
        'placeholder' => 'https:// xxx /api/',
    ],
    [
        'name' => 'api_select_method',
        'type' => 'Options',
        'label' => 'Verbindungsmethode',
        'tags' => 'api',
        'icon' => 'Check square o',
        'width' => 25,
        'options' => '
                1=No Auth
                2=API Key
                3=Bearer Token
                4=Basic Auth
                ',
    ],
    [
        'name' => 'api_username',
        'type' => 'Text',
        'label' => 'API Username',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 25,
        'placeholder' => 'API - USERNAME',
    ],
    [
        'name' => 'api_password',
        'type' => 'Text',
        'label' => 'API Password / Token',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 25,
        'placeholder' => 'API - PASSWORD',
    ],
    [
        'name' => 'api_key',
        'type' => 'Text',
        'label' => 'API Key',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 25,
        'placeholder' => 'API - KEY',
    ],
    [
        'name' => 'api_secret',
        'type' => 'Text',
        'label' => 'API Secret',
        'tags' => 'api',
        'icon' => 'Cogs',
        'width' => 25,
        'placeholder' => 'API - SECRET',
    ],
    [
        'name' => 'dynamic_api',
        'type' => 'DynamicOptions',
        'label' => 'Api Connection auswählen',
        'tags' => 'api',
        'icon' => 'Magic',
        'width' => 25,
        'inputfield_class' => 'InputfieldSelect',
    ],
    [
        'name' => 'repeater_api',
        'type' => 'Repeater',
        'label' => 'Repeater (Api)',
        'tags' => 'api',
        'icon' => 'Repeat',
        'width' => 100,
        'fields' => [
            'api_name',
            'api_url',
            'api_select_method',
            'api_username',
            'api_password',
            'api_key',
            'api_secret',
        ]
    ],
];