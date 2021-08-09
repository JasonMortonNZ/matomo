<?php

namespace Piwik\Plugins\CurrentLocalTime\Widgets;

use Piwik\Common;
use Piwik\Site;
use Piwik\Widget\Widget;
use Piwik\Widget\WidgetConfig;

class CurrentLocalTimeWidget extends Widget
{
    public static function configure(WidgetConfig $config)
    {
        /**
         * Set the category the widget belongs to. You can reuse any existing widget category or define
         * your own category.
         */
        $config->setCategoryId('About Matomo');

        /**
         * Set the name of the widget belongs to.
         */
        $config->setName('Current Local Time');

        /**
         * Set the order of the widget. The lower the number, the earlier the widget will be listed within a category.
         */
        $config->setOrder(99);
    }

    /**
     * This method renders the UI widget.
     *
     * @return string
     */
    public function render()
    {
        $siteID       = Common::getRequestVar('idSite');
        $site         = new Site($siteID);
        $siteTimeZone = $site->getTimezone();

        return $this->renderTemplate('widget', ['siteTimeZone' => $siteTimeZone]);
    }

}