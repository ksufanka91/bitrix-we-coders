<?php
$arResult['FAQ'] = [];
foreach ($arResult['PROPERTIES']['FAQ']['~VALUE'] as $key => $value) {
    $text = trim($value['TEXT']);
    $description = trim($arResult['PROPERTIES']['FAQ']['DESCRIPTION'][$key]);

    if ($text && $description) {
        $arResult['FAQ'][] = [
            'TEXT' => $text,
            'TYPE' => $value['TYPE'],
            'DESCRIPTION' => $description,
        ];
    }
}

$arResult['STAGES'] = [];

foreach ($arResult['PROPERTIES']['STAGES']['~VALUE'] as $key => $value) {
    $text = trim($value['TEXT']);
    $description = trim($arResult['PROPERTIES']['STAGES']['DESCRIPTION'][$key]);

    if ($text && $description) {
        $arResult['STAGES'][] = [
            'TEXT' => $text,
            'TYPE' => $value['TYPE'],
            'DESCRIPTION' => $description,
        ];
    }
}
