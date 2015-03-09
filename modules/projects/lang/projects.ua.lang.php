<?php

/**
 * projects module
 *
 * @package projects 
 * @author CrazyFreeMan (http://simple-website.in.ua/) 
 */


defined('COT_CODE') or die('Wrong URL.');

/**
 * Module Config
 */
$L['cfg_pagelimit'] = array('Число записів у списках');
$L['cfg_indexlimit'] = array('Число записів на головній');
$L['cfg_offersperpage'] = array('Число пропозицій на сторінці');
$L['cfg_shorttextlen'] = array('Кількість символів в списках');
$L['cfg_prevalidate'] = array('Включити попередню модерацію');
$L['cfg_preview'] = array('Включити попередній перегляд');
$L['cfg_prjsitemap'] = 'Додавати до Sitemap';
$L['cfg_prjsitemap_freq'] = 'Частота змін в Sitemap';
$L['cfg_prjsitemap_freq_params'] = $sitemap_freqs;
$L['cfg_prjsitemap_prio'] = array('Пріорітет в Sitemap');
$L['cfg_description'] = array('Опис');
$L['cfg_prjsearch'] = array('Додати в загальний пошук');
$L['cfg_license'] = array('Ліцензійний ключ');
$L['cfg_default_type'] = array('Тип проекту за замовчуванням');

$L['projects_select_cat'] = "Виберіть категорію";
$L['projects_empty_title'] = "Не вказано назву проекту";
$L['projects_empty_text'] = "Опис проекту не може бути порожнім";

$L['projects_forreview'] = 'Ваш проект знаходиться на перевірці. Модератор затвердить його публікацію найближчим часом.';
$L['projects_isrealized'] = 'Виконаний';

$L['projects'] = 'Каталог проектів';
$L['projects_projects'] = 'Проекти';
$L['projects_myprojects'] = 'Мої проекти';
$L['catalog'] = 'Каталог';
$L['projects_add_to_catalog'] = 'Додати проект';
$L['projects_edit_project'] = 'Редагувати проект';
$L['projects_add_project_title'] = 'Публікація проекту';
$L['projects_edit_project_title'] = 'Редагування проекту';

$L['projects_hidden'] = 'Проект не опублікований';
$L['projects_success_projects'] = 'Успішні проекти';
$L['projects_next'] = 'Далі';
$L['projects_reputation'] = 'Репутація';
$L['projects_aliascharacters'] = 'Неприпустимо використання символів \'+\', \'/\', \'?\', \'%\', \'#\', \'&\' в аліасах';

$L['projects_status_published'] = 'Опубліковано';
$L['projects_status_moderated'] = 'На перевірці';
$L['projects_status_hidden'] = 'Приховано';
$L['projects_admin_home_valqueue'] = 'На перевірці';
$L['projects_admin_home_public'] = 'Опубліковано';
$L['projects_admin_home_hidden'] = 'Приховані';

$L['project_added_mail_subj'] = 'Ваш проект опубліковано';
$L['project_senttovalidation_mail_subj'] = 'Ваш проект відправлений на перевірку';

$L['project_added_mail_body'] = 'Вітаю, {$user_name}. '."\n\n".'Ваш проект "{$prj_name}" опублікований на сайті {$sitename} - {$link}';
$L['project_senttovalidation_mail_body'] = 'Вітаю, {$user_name}.'."\n\n".'Ваш проект "{$prj_name}" відправлений на перевірку. Модератор затвердить його публікацію найближчим часом.';

$L['projects_price'] = 'Бюджет';

$L['projects_types_edit'] = 'Редагування типів';
$L['projects_types_new'] = 'Створити категорію';
$L['projects_types_editor'] = 'Редактор типів проектів';
$L['projects_price'] = 'Ціна';

$L['projects_sendoffer'] = 'Залишити пропозицію';
$L['projects_step2_title'] = 'Попередній перегляд проекту';
$L['projects_step2_buy'] = 'Оплатити';
$L['projects_step2_selectproject'] = 'Виділити проект';
$L['projects_nomoney'] = 'У вас недостатньо коштів на рахунку, щоб оплатити дану послугу.';

$L['projects_costasc'] = 'Ціна за зростанням';
$L['projects_costdesc'] = 'Ціна за спаданням';
$L['projects_mostrelevant'] = 'Найбільш актуальні';

$L['projects_notfound'] = 'Проекти не знайдені';
$L['projects_empty'] = 'Проектів немає';

$L['offers_timetype'] = array('годин', 'днів', 'місяців');

$L['offers_text_predl'] = 'Текст пропозиції';
$L['offers_hide_offer'] = 'Зробити пропозицію видимимою тільки для замовника';
$L['offers_for_guest'] = 'Залишати свої пропозиції щодо проекту можуть тільки зареєстровані користувачі з аккаунтом фахівця<br />
	<a href="'.cot_url('users', 'm=register').'">Зареєструйтеся</a> або <a href="'.cot_url('login').'">увійдіть</a> на сайт під своїм ім’ям.';

$L['offers_view_all'] = 'Подивитися всі';
$L['offers_add_offer'] = 'Залишити пропозицію';
$L['offers_upload'] = 'Завантажити';
$L['offers_offers'] = 'Пропозиції фрілансерів';
$L['offers_useroffers'] = 'Мої пропозиції';
$L['offers_budget'] = 'Бюджет';
$L['offers_sroki'] = 'Термін';
$L['offers_ot'] = 'від';
$L['offers_do'] = 'до';
$L['offers_otkazat'] = 'Відмовити';
$L['offers_otkazali'] = 'Відмовили';
$L['offers_ispolnitel'] = 'Виконавець';
$L['offers_vibran_ispolnitel'] = 'Вибраний виконавцем';
$L['offers_ostavit_predl'] = 'Залиште свою пропозицію';
$L['offers_add_predl'] = 'Додати пропозицію';
$L['offers_empty'] = 'Пропозиції відсутні';

$L['offers_useroffers_none'] = 'Не визначений';
$L['offers_useroffers_performer'] = 'Виконавець';
$L['offers_useroffers_refuse'] = 'Відмовили';

$L['offers_empty_text'] = 'Пропозиція не може бути порожнім';

$L['offers_add_msg'] = 'Написати повідомлення';
$L['offers_posts_title'] = 'Листування по замовленні';

$L['project_added_offer_header'] = 'Нова пропозиція до проекту «{$prtitle}»';
$L['project_added_offer_header2'] = 'Нове повідомлення до проекту «{$prtitle}»';
$L['project_added_offer_body'] = 'Вітаю, {$user_name}. '."\n\n".'Користувач {$offeruser_name} залишив вам повідомлення по проекту «{$prj_name}».'."\n\n".'{$link}';

$L['project_setperformer_header'] = 'Вас обрали по проекту «{$prtitle}»';
$L['project_setperformer_body'] = 'Вітаю, {$offeruser_name}. '."\n\n".'Вас обрали виконавцем по проекту «{$prj_name}».'."\n\n".'{$link}';

$L['project_refuse_header'] = 'Вам відмовили по проекту «{$prtitle}»';
$L['project_refuse_body'] = 'Вітаю, {$offeruser_name}. '."\n\n".'Вам відмовили по проекту «{$prj_name}».'."\n\n".'{$link}';

$L['project_realized'] = 'Позначити виконаним';
$L['project_unrealized'] = 'Позначити невиконаним';

$L['projects_license_error'] = 'Ваш ліцензійний ключ вказано з помилкою або не існує! Будь ласка, вкажіть дійсний ліцензійний ключ в налаштуваннях модуля Projects';

$L['plu_prj_set_sec'] = 'Категорії проектів';
$L['plu_prj_res_sort1'] = 'Даті публікації';
$L['plu_prj_res_sort2'] = 'Назві';
$L['plu_prj_res_sort3'] = 'Популярності';
$L['plu_prj_res_sort3'] = 'Категорії';
$L['plu_prj_search_names'] = 'Пошук в назвах проектів';
$L['plu_prj_search_text'] = 'Пошук в самих проектах';
$L['plu_prj_set_subsec'] = 'Пошук в підрозділах';