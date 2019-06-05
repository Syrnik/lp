<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

return array(
    'name'     => 'Динамические подсказки поиска',
    'img'      => 'img/lp.gif',
    'version'  => '1.0.0',
    'vendor'   => '670917',
    'frontend' => true,
    'handlers' =>
        array(
            'frontend_head' => 'handlerFrontendHead'
        ),
);
