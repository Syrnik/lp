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
     * @throws SmartyException
     * @throws waException
     */
    public function handlerFrontendHead(): string
    {
        $selector = trim($this->getSettings('selector'));

        $view = wa('shop')->getView();
        $phrases = explode("\n", $this->getSettings('phrases'));

        $phrases = array_filter(array_map(fn($v) => trim($v), $phrases));

        if (!$phrases) {
            return '';
        }

        $min_speed = max(1, (int)$this->getSettings('min_speed') ?: 80);
        $max_speed = max(1, (int)$this->getSettings('max_speed') ?: 450);
        $pause     = max(0, (int)$this->getSettings('pause') ?: 1000);
        $erase     = (bool)$this->getSettings('erase');

        $view->assign(compact('selector', 'phrases', 'min_speed', 'max_speed', 'pause', 'erase'));
        return $view->fetch($this->path . '/templates/hooks/frontend_head.html');
    }
}
