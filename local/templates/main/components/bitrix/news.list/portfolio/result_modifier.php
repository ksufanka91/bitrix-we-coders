<?php

if (!empty($arResult['ITEMS'])) {
    $arElementsIds = [];
    foreach ($arResult['ITEMS'] as $arItem) {
        if (isset($arItem['ID'])) {
            $arElementsIds[] = $arItem['ID'];
        }
    }

    $dbSections = CIBlockElement::GetElementGroups($arElementsIds);
    $arSections = [];
    while ($arSection = $dbSections->Fetch()) {
        $arSections[] = $arSection;
    }

    foreach ($arResult['ITEMS'] as $key => $arItem) {
        // получение названия основного раздела
        if (isset($arItem['IBLOCK_SECTION_ID'])) {
            $searchSectId = $arItem['IBLOCK_SECTION_ID'];

            foreach ($arSections as $section) {
                if ($section['ID'] === $searchSectId) {
                    $arResult['ITEMS'][$key]['SECTION_NAME'] = $section['NAME'];
                    break;
                }
            }
        }

        if (!isset($arResult['ITEMS'][$key]['SECTION_NAME'])) {
            $arResult['ITEMS'][$key]['SECTION_NAME'] = '';
        }

        // Получение кодов разделов для элемента
        if (isset($arItem['ID'])) {
            $arElementSectionCodes = [];

            foreach ($arSections as $section) {
                if ($arItem['ID'] == $section['IBLOCK_ELEMENT_ID']) {
                    $arElementSectionCodes[] = $section['CODE'];
                }
            }

            $arResult['ITEMS'][$key]['SECTION_CODES'] = implode(' ', $arElementSectionCodes);
        } else {
            $arResult['ITEMS'][$key]['SECTION_CODES'] = '';
        }
    }
}
