<?php
declare(strict_types=1);

namespace LunaPress\Core\Plugin;

use LunaPress\CoreContracts\Plugin\IConfig;
use LunaPress\CoreContracts\Plugin\IPluginContext;
use RuntimeException;

defined('ABSPATH') || exit;

final readonly class PluginStubs
{
    public static function config(): IConfig
    {
        throw new RuntimeException('IConfig accessed before initialization');
    }

    public static function context(): IPluginContext
    {
        throw new RuntimeException('IPluginContext accessed before initialization');
    }
}
