<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;

?>
<!DOCTYPE html>
<!--[if lt IE 8]>  <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>  <html class="no-js"><![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle();?></title>

    <?$APPLICATION->ShowHead();?>
    <meta name="keywords" content="Ключевые слова"/>
    <meta name="description" content="Описание страницы"/>

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/common-styles.css');?>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/ico/favicon_bx.png">

    <!--[if lt IE 9]>
    <script src="<?=CUtil::GetAdditionalFileUrl(SITE_TEMPLATE_PATH.'/js/vendor/modernizr-html5shiv-respond.min.js');?>"></script>

    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="<?=CUtil::GetAdditionalFileUrl(SITE_TEMPLATE_PATH.'/js/vendor/modernizr.min.js');?>"></script>
    <!--<![endif]-->
</head>
<body>
<!--[if lt IE 8]>
<p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
    href="http://browsehappy.com/">
    обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
    Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
<![endif]-->
<?$APPLICATION->ShowPanel();?>
<div class="sticky-wrap">
    <header>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">                                        
                        <? if($bIsMainPage) { ?>
                            <span class="logo">
                            <div class="image">Intervolga.ru</div>
                            <div id="slogan-rand" class="slogan">
                                <noscript>Сайты и реклама в интернете</noscript>
                            </div>
                        </span>
                        <? } else { ?>
                            <a class="logo" href="/">
                            <div class="image">Intervolga.ru</div>
                            <div id="slogan-rand" class="slogan">
                                <noscript>Сайты и реклама в интернете</noscript>
                            </div>
                        </a>
                        <? } ?>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-7 col-xs-12 hidden-xs">
                                <ul class="btn-list-inline">
                                    
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."include/slogan.php",
                                        array(),
                                        array(
                                            "mode" => "text",
                                            "NAME"      => "слоган", 
                                        )
                                    );
                                    ?>                                    
                                </ul>
                            </div>
                            <div class="col-lg-5 col-xs-12 hidden-print">
                                <div class="input-group-search">
                                    <input type="text" class="form-control" placeholder="Поиск...">
                                    <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <ul class="phone-list">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/phone.php",
                                array(),
                                array(
                                    "mode" => "html"
                                )
                            );?>                                                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu",
		"MENU_THEME" => "site"
	),
	false
);?>
    <? if ($bIsMainPage) {?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "index", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "DISPLAY_DATE" => "N",	// Выводить дату элемента
            "DISPLAY_NAME" => "Y",	// Выводить название элемента
            "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "FIELD_CODE" => array(	// Поля
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "PREVIEW_PICTURE",
                3 => "",
            ),
            "FILTER_NAME" => "",	// Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "1",	// Код информационного блока
            "IBLOCK_TYPE" => "index",	// Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
            "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",	// Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости",	// Название категорий
            "PARENT_SECTION" => "",	// ID раздела
            "PARENT_SECTION_CODE" => "",	// Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(	// Свойства
                0 => "url",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",	// Устанавливать статус 404
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SHOW_404" => "N",	// Показ специальной страницы
            "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
            "COMPONENT_TEMPLATE" => ".default"
        ),
            false
        );?>

    <div class="activities-description-wrap">
        <div class="activities-description">
            <div class="container">
                <div class="activities-inner">
                    <h3>Последние посещенные вами страницы</h3>
                    <ul>
                        <li><a href="#">Мы стали использовать новую ткань</a></li>
                        <li><a href="#">Главная страница</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mbl">
           <div class="row">
               <div class="col-md-12">
                   <div class="live-main">
                        <h5><a href="#">Новости</a></h5>
                        <div class="live-pagination">
                            <a class="prev" href="#prev"><i class="fa fa-angle-left"></i></a>
                            <a class="next" href="#next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="live-list-wrap">
                            <div class="live-list">
                                <div class="live-list-item" id="live-1">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-1.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Изобретение относится к области получения и применения...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-twitter"></i>
                                                <a href="#">Новое веяние в одежде - получено прочное водостойкое соединение</a>
                                            </div>
                                            <span class="live-item-data">25 Декабря 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-2">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-2.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">В следующем году состоится выставка одежды...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-vk"></i>
                                                <a href="#">Международная выставка одежды Salon De Fashion</a>
                                            </div>
                                            <span class="live-item-data">22 Октября 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-3">
                                    <div class="live-item-body">
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Для пошива нашей одежды мы стали использовать новую
                                                    инновационную ткань</div>
                                            </div>
                                            <div class="live-item-label">
                                                <a href="#">Мы стали использовать новую ткань</a>
                                            </div>
                                            <span class="live-item-data">2 Июня 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-4">
                                    <div class="live-item-body">
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">Мы расширяем свой размерный ряд. Теперь наша одежда будет
                                                    доступна большему количеству людей</div>
                                            </div>
                                            <div class="live-item-label">
                                                <a href="#">Размерный ряд</a>
                                            </div>
                                            <span class="live-item-data">30 Апреля 2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="live-list-item" id="live-5">
                                    <div class="live-item-body image">
                                        <a class="live-item-img" href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/live-list/img-3.jpg" alt=""/></a>
                                        <div class="live-item-body-over">
                                            <div class="live-item-description">
                                                <div class="description">С 20 по 23 февраля состоится...</div>
                                            </div>
                                            <div class="live-item-label">
                                                <i class="fa fa fa-twitter"></i>
                                                <a href="#">Форум производителей одежды в России</a>
                                            </div>
                                            <span class="live-item-data">22 Апреля 2014</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
    <? } ?>

    <div class="container">
        <? if (!$bIsMainPage) {?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "breadcrumb",
                array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0",
                    "COMPONENT_TEMPLATE" => "breadcrumb"
                ),
                false
            );?>
         <? } ?>
        <h1><?$APPLICATION->ShowTitle(false);?></h1>
    </div>
    <div class="container">
