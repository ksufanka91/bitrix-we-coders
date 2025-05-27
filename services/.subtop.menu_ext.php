<?php

global $APPLICATION;

$sections = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    [
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "services",
        "DEPTH_LEVEL" => "1",
        "IS_SEF" => "Y",
        "SEF_BASE_URL" => "/services/",
        "SECTION_PAGE_URL" => "",
        "DETAIL_PAGE_URL" => "#ELEMENT_CODE#/",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
    ]
);

$aMenuLinks = array_merge($aMenuLinks, $sections);