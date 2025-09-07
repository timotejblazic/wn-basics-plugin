<?php namespace Tb\Basics;

use System\Classes\PluginBase;

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

    }

    public function boot(): void
    {

    }
}
