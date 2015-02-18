<?php
/**
 * roboxbilling plugin
 *
 * @package roboxbilling
 * @author CrazyFreeMan (http://simple-website.in.ua/) 
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */
$L['cfg_mrh_login'] = array('Логін в Робокасі');
$L['cfg_mrh_pass1'] = array('Пароль #1 в Робокасі');
$L['cfg_mrh_pass2'] =  array('Пароль #2 в Робокасі');
$L['cfg_testmode'] = array('Тестовий режим');
$L['cfg_enablepost'] = array('Увімкнути post запити');
$L['cfg_rate'] = array('Співвідношення суми до валюти сайту');

$L['roboxbilling_title'] = 'Робокаса';

$L['roboxbilling_error_paid'] = 'Оплата пройшла успішно. Найближчим часом послуга буде активована!';
$L['roboxbilling_error_done'] = 'Оплата пройшла успішно.';
$L['roboxbilling_error_incorrect'] = 'Некоректний підпис';
$L['roboxbilling_error_otkaz'] = 'Відмова від оплати.';
$L['roboxbilling_error_title'] = 'Результат операції оплати';
$L['roboxbilling_error_fail'] = 'Оплата не проведена! Будь ласка, спробуйте ще раз. Якщо помилка повториться, зверніться до адміністратора сайту';

$L['roboxbilling_redirect_text'] = 'Зараз відбудеться перенаправлення на сторінку оплаченої послуги. Якщо цього не сталося, перейдіть за <a href="%1$s">посиланням</a>.';