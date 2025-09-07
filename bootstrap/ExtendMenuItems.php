<?php namespace Tb\Basics\Bootstrap;

use Event;

class ExtendMenuItems
{
    public function init()
    {
        $this->extendMenuItems();
    }

    protected function extendMenuItems()
    {
        Event::listen('backend.form.extendFieldsBefore', function ($widget) {
            if (!$widget->getController() instanceof \Winter\Pages\Controllers\Index) {
                return;
            }

            if (!$widget->model instanceof \Winter\Pages\Classes\MenuItem) {
                return;
            }

            if ($widget->isNested) {
                return;
            }

            $widget->tabs['fields']['viewBag[isExposed]'] = [
                'label'   => 'Exposed',
                'type'    => 'checkbox',
                'comment' => 'Expose this menu item with different style on front-end.',
                'tab'     => 'winter.pages::lang.menuitem.display_tab',
            ];
        });
    }
}