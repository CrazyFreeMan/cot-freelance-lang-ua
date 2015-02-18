<?php
/**
 * wmbilling plugin
 *
 * @package wmbilling
 * @author CrazyFreeMan (http://simple-website.in.ua/) 
 */
defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */
$L['cfg_webmoney_purse'] = array('Webmoney гаманець');
$L['cfg_webmoney_wmid'] = array('Webmoney WMID');
$L['cfg_webmoney_skey'] = array('Webmoney Sekret key');
$L['cfg_webmoney_mode'] = array('Тестовий режим');
$L['cfg_webmoney_hashmethod'] = array('Hash method');
$L['cfg_webmoney_rate'] = array('Співвідношення до валюти сайту');

$L['wmbilling_title'] = 'Webmoney';

$L['wmbilling_formtext'] = 'Зараз ви будете перенаправлені на сайт платіжної системи Webmoney для проведення оплати. Якщо цього не сталося, натисніть кнопку "Перейти до оплати".';
$L['wmbilling_formbuy'] = 'Перейти до оплати';
$L['wmbilling_error_paid'] = 'Оплата пройшла успішно. Найближчим часом послуга буде активована!';
$L['wmbilling_error_done'] = 'Оплата пройшла успішно.';
$L['wmbilling_error_incorrect'] = 'Некоректний підпис';
$L['wmbilling_error_otkaz'] = 'Відмова від оплати.';
$L['wmbilling_error_title'] = 'Результат операції оплати';
$L['wmbilling_error_fail'] = 'Оплата не проведена! Будь ласка, спробуйте ще раз. Якщо помилка повториться, зверніться до адміністратора сайту';

$L['wmbilling_redirect_text'] = 'Зараз відбудеться перенаправлення на сторінку оплаченої послуги. Якщо цього не сталося, перейдіть за <a href="%1$s">посиланням</a>.';