<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('TITLE', 'О нас | We coders');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
?>

<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                [
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_title",
                ]
            ); ?>
        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_text",
                        ]
                    ); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "about_image",
                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
