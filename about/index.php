<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("О нас");
$APPLICATION->SetPageProperty('TITLE', 'О нас | We coders');
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

<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1">Немного о нас</h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                    <p>Мы в <b>WeCoders</b> считаем, что любую задачу, даже которая кажется «невозможной» можно
                        решить, чем мы успешно и занимаемся! У нас собрались только творческие и ответственные
                        люди,которым под силу решить любую проблему в сфере digital, чтобы помочь другим бизнесам
                        достичь своих целей. </p>
                    <p>Используя накопленный за многие годы опыт работы с крупными мировыми корпорациями, мы создаем
                        творческие инновации, которые обеспечивают реальные результаты. Прокрутите вниз, чтобы узнать
                        немного о том,
                        <a href="#team">кто все это делает</a>
                        .
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="img/about/o_nas_text_block.jpg" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>
