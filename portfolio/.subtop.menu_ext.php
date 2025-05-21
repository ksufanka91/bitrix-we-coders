<?php

global $APPLICATION;

$sections = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    [
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "1",
        "DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "IS_SEF" => "Y",
        "SECTION_PAGE_URL" => "#SECTION_CODE#/",
        "SEF_BASE_URL" => "/portfolio/",
    ]
);

$aMenuLinks = array_merge($aMenuLinks, $sections);