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

//echo __FILE__ . ':' . __LINE__ . PHP_EOL;
//echo '<pre>' . print_r($arResult, true) . '</pre>' . PHP_EOL;
//exit;
?>

<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $arResult['NAME']; ?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <?= $arResult['DETAIL_TEXT'] ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Доп. контент об услуге -->
<div class="pb-60">
    <div class="container">
        <div class="row">
            <?php if (!empty($arResult['FAQ'])): ?>
                <div class="col-md-6">
                    <h3 class="mb-30">Вопросы и ответы</h3>
                    <div class="brand-accordion">
                        <div class="panel-group icon angle-icon" id="accordion" role="tablist"
                             aria-multiselectable="true">
                            <?php foreach ($arResult['FAQ'] as $iKey => $arValue): ?>
                                <?php
                                $bFirst = $iKey === 0;
                                $id = 'collapse-' . ($iKey + 1);
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a class="<?= $bFirst ? '' : 'collapsed'; ?>" role="button"
                                               data-toggle="collapse" data-parent="#accordion"
                                               href="#<?= $id; ?>" aria-expanded="true" aria-controls="<?= $id; ?>">
                                                <?= $arValue['DESCRIPTION'] ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="<?= $id; ?>"
                                         class="panel-collapse collapse<?= $bFirst ? ' in' : ''; ?>"
                                         role="tabpanel" aria-labelledby="<?= $id; ?>">
                                        <div class="panel-body"><?= $arValue['TEXT']; ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>


            <?php if (!empty($arResult['STAGES'])): ?>
                <div class="col-lg-6 col-md-6">
                    <h3 class="mb-30">Этапы разработки</h3>
                    <div class="my-tab">
                        <!-- Nav tabs -->
                        <ul class="custom-tab mb-15" role="tablist">
                            <?php foreach ($arResult['STAGES'] as $iKey => $arValue): ?>
                                <?php
                                $bFirst = $iKey === 0;
                                $id = 'stage-' . ($iKey + 1);
                                ?>
                                <li role="presentation" class="<?= $bFirst ? 'active' : ''; ?>">
                                    <a href="#<?= $id; ?>" aria-controls="<?= $id; ?>" role="tab"
                                       data-toggle="tab">
                                        <?= $arValue['DESCRIPTION']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="tab-content">
                            <?php foreach ($arResult['STAGES'] as $iKey => $arValue): ?>
                                <?php
                                $bFirst = $iKey === 0;
                                $id = 'stage-' . ($iKey + 1);
                                ?>
                                <div id="<?= $id; ?>" class="tab-pane fade<?= $bFirst ? ' active in' : ''; ?>"
                                     role="tabpanel">
                                    <?php if ($arValue['TYPE'] === 'HTML'): ?>
                                        <?= $arValue['TEXT']; ?>
                                    <?php else: ?>
                                        <p><?= $arValue['TEXT']; ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
