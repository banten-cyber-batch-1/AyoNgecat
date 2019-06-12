<?php namespace Ayongecat\Setting;

use Backend;
use System\Classes\PluginBase;

/**
 * Setting Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Setting',
            'description' => 'No description provided yet...',
            'author'      => 'Ayongecat',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Ayongecat\Setting\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ayongecat.setting.some_permission' => [
                'tab' => 'Setting',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'setting' => [
                'label'       => 'Setting',
                'url'         => Backend::url('ayongecat/setting/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ayongecat.setting.*'],
                'order'       => 500,
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'general' => [
                'label'       => 'General',
                'description' => 'Manage general website setting configurations',
                'category'    => 'Site',
                'icon'        => 'icon-globe',
                'class'       => 'Ayongecat\Setting\Models\General',
                'order'       => 100,
            ],
            'page' => [
                'label'       => 'Page',
                'description' => 'Manage page website setting configurations',
                'category'    => 'Site',
                'icon'        => 'icon-file',
                'class'       => 'Ayongecat\Setting\Models\Page',
                'order'       => 101,
            ],
            'appearance' => [
                'label'       => 'Appearance',
                'description' => 'Manage apperance website setting configurations',
                'category'    => 'Site',
                'icon'        => 'icon-image',
                'class'       => 'Ayongecat\Setting\Models\Appearance',
                'order'       => 102,
            ],
        ];
    }
}
