<?php namespace Ayongecat\Program;

use Backend;
use System\Classes\PluginBase;

/**
 * Program Plugin Information File
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
            'name'        => 'Program',
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
        // return []; // Remove this line to activate

        return [
            'Ayongecat\Program\Components\Program' => 'Program',
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
            'ayongecat.program.some_permission' => [
                'tab' => 'Program',
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
            'program' => [
                'label'       => 'Program',
                'url'         => Backend::url('ayongecat/program/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ayongecat.program.*'],
                'order'       => 500,
            ],
        ];
    }
}
