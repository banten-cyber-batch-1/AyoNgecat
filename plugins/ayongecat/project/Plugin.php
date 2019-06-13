<?php namespace Ayongecat\Project;

use Backend;
use System\Classes\PluginBase;

/**
 * Project Plugin Information File
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
            'name'        => 'Project',
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
            'Ayongecat\Project\Components\Project'       => 'Project',
            'Ayongecat\Project\Components\ProjectDetail' => 'ProjectDetail',
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
            'ayongecat.project.some_permission' => [
                'tab' => 'Project',
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
            'project' => [
                'label'       => 'Project',
                'url'         => Backend::url('ayongecat/project/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ayongecat.project.*'],
                'order'       => 500,
            ],
        ];
    }
}
