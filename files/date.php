<?php

//дата и время для админ панели
date_default_timezone_set("Asia/Yekaterinburg");

function getDateRus()
{
    $monthes = array(
        1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
        5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
        9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
    );
    return ((int)date('d') . ' ' . $monthes[(date('n'))] . date(' Y'));
}

function getDayRus()
{
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[(date('w'))];
}

