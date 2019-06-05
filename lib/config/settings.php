<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

return array(
    'selector' => array(
        'title'        => 'Селектор поля поиска',
        'description'  => 'Селектор элемента, у которого надо менять атрибут placeholder',
        'placeholder'  => 'input[name=query]',
        'control_type' => waHtmlControl::INPUT,
        'value'        => ''
    ),
    'phrases'  => array(
        'title'        => 'Список заменителей',
        'description'  => 'Одна строка — одна подсказка. Если оставить пустым, то плагин выключится',
        'control_type' => waHtmlControl::TEXTAREA,
        'value'        => 'Ищите и обрящите'
    )
);