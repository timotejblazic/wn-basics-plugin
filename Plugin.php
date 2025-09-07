<?php namespace Tb\Basics;

use Event;
use System\Classes\PluginBase;
use Tb\Basics\Bootstrap\ExtendMenuItems;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'tb.basics::lang.plugin.name',
            'description' => 'tb.basics::lang.plugin.description',
            'author'      => 'Tb',
            'icon'        => 'icon-leaf'
        ];
    }

    public function register(): void
    {
        require_once __DIR__ . '/helpers.php';
    }

    public function boot(): void
    {
        (new ExtendMenuItems)->init();
    }
}
