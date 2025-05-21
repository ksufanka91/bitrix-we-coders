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
                    <a href="<?= $item['LINK']; ?>" <?= $item['SELECTED'] ? 'style="color: #009cbb"' : ''; ?>>
                        <?= $item['TEXT']; ?>
                        <?php if (!empty($item['SUBITEMS'])): ?>
                            <span class="indicator"><i class="fa fa-angle-down"></i></span>
                        <?php endif; ?>
                    </a>

                    <?php if (!empty($item['SUBITEMS'])): ?>
                        <ul class="dropdown">
                            <?php foreach ($item['SUBITEMS'] as $subitem): ?>
                                <li>
                                    <a href="<?= $subitem['LINK']; ?>"><?= $subitem['TEXT']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>
