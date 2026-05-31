<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

return [
    'selector'  => [
        'title'        => /*_wp*/('Search field selector'),
        'description'  => /*_wp*/('CSS selector of the input element whose placeholder attribute will be animated'),
        'placeholder'  => 'input[name=query]',
        'control_type' => waHtmlControl::INPUT,
        'value'        => ''
    ],
    'phrases'   => [
        'title'        => /*_wp*/('Phrase list'),
        'description'  => /*_wp*/('One phrase per line. Leave empty to disable the plugin'),
        'control_type' => waHtmlControl::TEXTAREA,
        'value'        => /*_wp*/('Search and you shall find')
    ],
    'min_speed' => [
        'title'        => /*_wp*/('Minimum typing speed'),
        'description'  => /*_wp*/('Minimum delay between characters, ms. Higher = slower'),
        'control_type' => waHtmlControl::INPUT,
        'value'        => 80
    ],
    'max_speed' => [
        'title'        => /*_wp*/('Maximum typing speed'),
        'description'  => /*_wp*/('Maximum delay between characters, ms'),
        'control_type' => waHtmlControl::INPUT,
        'value'        => 450
    ],
    'pause'     => [
        'title'        => /*_wp*/('Pause between phrases'),
        'description'  => /*_wp*/('Delay after a phrase is fully typed, ms'),
        'control_type' => waHtmlControl::INPUT,
        'value'        => 1000
    ],
    'erase'     => [
        'title'        => /*_wp*/('Letter-by-letter erasure'),
        'description'  => /*_wp*/('Erase the current phrase character by character before showing the next one'),
        'control_type' => waHtmlControl::CHECKBOX,
        'value'        => 0
    ],
];
