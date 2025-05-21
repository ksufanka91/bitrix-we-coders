<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) exit;
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
<div class="col-lg-7 col-md-7 col-sm-12">
    <div class="footer-nav white-text">
        <nav>
            <ul>
                <?php foreach ($arResult as $item): ?>
                    <li class="test">
                        <?php if ($item['SELECTED']): ?>
                            <a href="<?= $item['LINK'] ?>" style="color: #81ddff;"><?= $item['TEXT'] ?></a>
                        <?php else: ?>
                            <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
