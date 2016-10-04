<?php

namespace Taisiya\AuthBundle\Composer;

use Taisiya\CoreBundle\Composer\ScriptHandler;

class DevScriptHandler extends ScriptHandler
{
    public static function defineRootDir(): void
    {
        defined('ROOT_DIR') || define('ROOT_DIR', dirname(dirname(__DIR__)));
    }
}
