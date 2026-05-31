<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

return [
    'selector'  => [
        'title'        => 'Селектор поля поиска',
        'description'  => 'Селектор элемента, у которого надо менять атрибут placeholder',
        'placeholder'  => 'input[name=query]',
        'control_type' => waHtmlControl::INPUT,
        'value'        => ''
    ],
    'phrases'   => [
        'title'        => 'Список заменителей',
        'description'  => 'Одна строка — одна подсказка. Если оставить пустым, то плагин выключится',
        'control_type' => waHtmlControl::TEXTAREA,
        'value'        => 'Ищите и обрящите'
    ],
    'min_speed' => [
        'title'        => 'Минимальная скорость набора',
        'description'  => 'Минимальная задержка между символами, мс. Больше — медленнее',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 80
    ],
    'max_speed' => [
        'title'        => 'Максимальная скорость набора',
        'description'  => 'Максимальная задержка между символами, мс',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 450
    ],
    'pause'     => [
        'title'        => 'Пауза между подсказками',
        'description'  => 'Задержка после полного набора слова, мс',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 1000
    ],
    'erase'     => [
        'title'        => 'Стирать посимвольно',
        'description'  => 'Стирать подсказку посимвольно перед показом следующей',
        'control_type' => waHtmlControl::CHECKBOX,
        'value'        => 0
    ],
];
