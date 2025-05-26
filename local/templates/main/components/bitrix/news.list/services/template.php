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

<!-- Услуги -->
<section id="pricing" class="pricing-area bg-color pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Разработка сайта</h2>
                <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddEditAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-pricing text-center mb-30">
                        <div class="pricing-head">
                            <h2 class="pricing-title text-uppercase"><?= $arItem['NAME']; ?></h2>
                            <span><?= $arItem['PROPERTIES']['SUBTITLE']['VALUE']; ?></span>
                        </div>
                        <div class="pricing-plan-price <?= $arItem['PROPERTIES']['COLOR']['VALUE_XML_ID']; ?>-bg">
                            <span><span>от </span><?= $arItem['PROPERTIES']['PRICE']['VALUE']; ?><span> ₽</span></span>
                        </div>
                        <div class="pricing-plan-list">
                            <ul>
                                <?php foreach ($arItem['PROPERTIES']['ADVANTAGES']['VALUE'] as $arValue): ?>
                                    <li><?= $arValue; ?></li>
                                <?php endforeach; ?>
                                <?php if (count($arItem['PROPERTIES']['ADVANTAGES']['VALUE']) < 6): ?>
                                    <?= str_repeat('<li>-</li>', 6 - count($arItem['PROPERTIES']['ADVANTAGES']['VALUE'])); ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="get-started">
                            <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="btn <?= $arItem['PROPERTIES']['COLOR']['VALUE_XML_ID']; ?>-bg">Узнать больше</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
