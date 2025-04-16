<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

if (empty($arResult)) return;
?>
<div class="header-main-menu hidden-xs">
    <nav id="primary-menu">
        <ul class="main-menu text-right">
            <?php foreach ($arResult as $item): ?>
                <li>
                    <?php if ($item['SELECTED']): ?>
                        <a href="<?= $item['LINK'] ?>" style="color: blue"><?= $item['TEXT'] ?></a>
                    <?php else: ?>
                        <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>

<?php
/*<li>
    <a href="services.html"> Услуги
        <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
    <ul class="dropdown">
        <li>
            <a href="services_landing.html">Лендинг</a>
        </li>
        <li>
            <a href="services_online_shop.html">Интернет-магазин</a>
        </li>
    </ul>
</li>*/