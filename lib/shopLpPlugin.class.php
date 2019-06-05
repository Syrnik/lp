<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */

/**
 * Class shopLpPlugin
 */
class shopLpPlugin extends shopPlugin
{
    /**
     * Обработчик хука frontend_head
     *
     * @return string
     */
    public function handlerFrontendHead()
    {
        $selector = trim($this->getSettings('selector'));

        $view = wa('shop')->getView();
        $phrases = explode("\n", $this->getSettings('phrases'));

        $phrases = array_filter(array_map(function ($v) {
            return trim($v);
        }, $phrases));

        if (!$phrases) {
            return '';
        }

        $view->assign(compact('selector', 'phrases'));
        return $view->fetch($this->path . '/templates/hooks/frontend_head.html');
    }
}
