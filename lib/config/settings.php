<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

return [
    'selector'  => [
        'title'        => 'Search field selector',
        'description'  => 'CSS selector of the input element whose placeholder attribute will be animated',
        'placeholder'  => 'input[name=query]',
        'control_type' => waHtmlControl::INPUT,
        'value'        => ''
    ],
    'phrases'   => [
        'title'        => 'Phrase list',
        'description'  => 'One phrase per line. Leave empty to disable the plugin',
        'control_type' => waHtmlControl::TEXTAREA,
        'value'        => 'Search and you shall find'
    ],
    'min_speed' => [
        'title'        => 'Minimum typing speed',
        'description'  => 'Minimum delay between characters, ms. Higher = slower',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 80
    ],
    'max_speed' => [
        'title'        => 'Maximum typing speed',
        'description'  => 'Maximum delay between characters, ms',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 450
    ],
    'pause'     => [
        'title'        => 'Pause between phrases',
        'description'  => 'Delay after a phrase is fully typed, ms',
        'control_type' => waHtmlControl::INPUT,
        'value'        => 1000
    ],
    'erase'     => [
        'title'        => 'Letter-by-letter erasure',
        'description'  => 'Erase the current phrase character by character before showing the next one',
        'control_type' => waHtmlControl::CHECKBOX,
        'value'        => 0
    ],
];
