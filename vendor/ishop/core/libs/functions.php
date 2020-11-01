<?php


/**
 * @param  array $arr  - входной массив
 * @return       void  - возвращаем красивый массив
 */
function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}