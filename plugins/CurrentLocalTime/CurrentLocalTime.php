<?php

namespace Piwik\Plugins\CurrentLocalTime;

class CurrentLocalTime extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return [
            'AssetManager.getJavaScriptFiles' => 'getJavaScriptFiles',
        ];
    }

    public function getJavaScriptFiles(&$files)
    {
        $files[] = "plugins/CurrentLocalTime/javascripts/moment.min.js";
        $files[] = "plugins/CurrentLocalTime/javascripts/moment-timezone.min.js";
    }
}
