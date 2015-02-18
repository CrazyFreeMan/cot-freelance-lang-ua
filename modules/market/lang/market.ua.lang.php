<?php

/**
 * market module
 *
 * @package market
 * @author CrazyFreeMan (http://simple-website.in.ua/) 
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_pagelimit'] = array('Число записів у списках');
$L['cfg_shorttextlen'] = array('Кількість символів у списках');
$L['cfg_prevalidate'] = array('Включити попередню модерацію');
$L['cfg_preview'] = array('Включить предварительный просмотр');
$L['cfg_marketsitemap'] = 'Додавати до Sitemap';
$L['cfg_marketsitemap_freq'] = 'Частота змін в Sitemap';
$L['cfg_marketsitemap_freq_params'] = $sitemap_freqs;
$L['cfg_marketsitemap_prio'] = array('Пріорітет в Sitemap');
$L['cfg_description'] = array('Опис');
$L['cfg_marketsearch'] = array('Додати в загальний пошук');
$L['cfg_warranty'] = array('Гарантійний термін (днів)');
$L['cfg_tax'] = array('Комісія за продаж (%)');
$L['cfg_ordersperpage'] = array('Кількість замовлень на сторінці');

$L['market_select_cat'] = "Виберіть розділ";
$L['market_empty_title'] = "Назва не може бути порожньою";
$L['market_empty_text'] = "Опис не може бути порожнім";
$L['market_large_img'] = "Зображення занадто велике";

$L['market_forreview'] = 'Ваш товар знаходиться на перевірці. Модератор затвердить його публікацію найближчим часом.';

$L['market'] = 'Магазин';
$L['market_myproducts'] = 'Мої товари';

$L['market_catalog'] = 'Каталог';
$L['market_add_product'] = 'Додати товар';
$L['market_edit_product'] = 'Редагувати товар';
$L['market_add_product_title'] = 'Додавання товару в магазин';
$L['market_edit_product_title'] = 'Редагування товару з магазину';

$L['market_hidden'] = 'Товар не опублікований';
$L['market_location'] = 'Місцезнаходження';
$L['market_price'] = 'Ціна';
$L['market_image_limit'] = 'Дозволені формати JPEG, GIF, JPG, PNG. Максимальний розмір 1Мб.';

$L['market_costasc'] = 'Ціна за зростанням';
$L['market_costdesc'] = 'Ціна за спаданням';
$L['market_mostrelevant'] = 'Найбільш актуальні';

$L['market_notfound'] = 'Товари не знайдені';
$L['market_empty'] = 'Товарів немає';

$L['market_added_mail_subj'] = 'Ваш товар опублікований';
$L['market_senttovalidation_mail_subj'] = 'Ваш товар відправлений на перевірку';
$L['market_admin_home_valqueue'] = 'На перевірці';
$L['market_admin_home_public'] = 'Опубліковано';
$L['market_admin_home_hidden'] = 'Приховані';

$L['market_added_mail_body'] = 'Вітаю, {$user_name}. '."\n\n".'Ваш товар "{$prd_name}" опублікований на сайті {$sitename} - {$link}';
$L['market_senttovalidation_mail_body'] = 'Вітаю, {$user_name}.'."\n\n".'Ваш товар "{$prd_name}" відправлений на перевірку. Модератор затвердить його публікацію найближчим часом.';

$L['market_status_published'] = 'Опубліковано';
$L['market_status_moderated'] = 'На перевірці';
$L['market_status_hidden'] = 'Приховано';

$L['plu_market_set_sec'] = 'Категорії товарів';
$L['plu_market_res_sort1'] = 'Даті публікації';
$L['plu_market_res_sort2'] = 'Назвою';
$L['plu_market_res_sort3'] = 'Популярності';
$L['plu_market_res_sort3'] = 'Категорії';
$L['plu_market_search_names'] = 'Пошук в назві товару';
$L['plu_market_search_text'] = 'Пошук в описі';
$L['plu_market_set_subsec'] = 'Пошук в підрозділах';