<?php
$arUrlRewrite = [
    [
        'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
        'RULE' => 'componentName=$1',
        'ID' => null,
        'PATH' => '/bitrix/services/mobileapp/jn.php',
        'SORT' => 100,
    ],
    [
        'CONDITION' => '#^/rest/#',
        'RULE' => '',
        'ID' => null,
        'PATH' => '/bitrix/services/rest/index.php',
        'SORT' => 100,
    ],
];
