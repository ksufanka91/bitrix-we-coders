<?php
$arUrlRewrite = [
    0 =>
        [
            'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
            'RULE' => 'componentName=$1',
            'ID' => NULL,
            'PATH' => '/bitrix/services/mobileapp/jn.php',
            'SORT' => 100,
        ],
    3 =>
        [
            'CONDITION' => '#^/portfolio/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/portfolio/index.php',
            'SORT' => 100,
        ],
    1 =>
        [
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ],
    2 =>
        [
            'CONDITION' => '#^/test/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/test.php',
            'SORT' => 100,
        ],
];
