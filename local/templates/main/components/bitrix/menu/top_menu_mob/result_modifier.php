<?php

$arTmp = [];
if (!empty($arResult)) {
    foreach ($arResult as $item) {
        if ($item['DEPTH_LEVEL'] === 1) {
            $arTmp[] = $item;
        } else {
            $lastKey = count($arTmp) - 1;;
            $arTmp[$lastKey]['SUBITEMS'][] = $item;
        }
    }
}
$arResult = $arTmp;
