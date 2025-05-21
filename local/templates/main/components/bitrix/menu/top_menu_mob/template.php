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

<div class="mobile-menu-area visible-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <?php foreach ($arResult as $item): ?>
                                <li>
                                    <a href="<?= $item['LINK']; ?>" <?= $item['SELECTED'] ? 'style="color: #009cbb"' : ''; ?>>
                                        <?= $item['TEXT']; ?>
                                    </a>

                                    <?php if (!empty($item['SUBITEMS'])): ?>
                                        <ul>
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
            </div>
        </div>
    </div>
</div>
