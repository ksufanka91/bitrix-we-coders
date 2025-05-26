<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (empty($arResult['ITEMS'])) return; ?>

<div class="our-skill">
    <h2 class="title-1">Skills</h2>
    <div class="progress-list">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddEditAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
            <div class="progress">
                <div class="lead"><?= $arItem['NAME'] ?></div>
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                     aria-valuemax="100" style="width: <?= $arItem['PROPERTIES']['SKILL_VALUE']['VALUE'] ?>%;">
                    <span><?= $arItem['PROPERTIES']['SKILL_VALUE']['VALUE'] ?>%</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
