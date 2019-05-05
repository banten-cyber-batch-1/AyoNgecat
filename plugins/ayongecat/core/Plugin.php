<?php namespace Ayongecat\Core;

use Backend;
use System\Classes\PluginBase;

/**
 * Core Plugin Information File
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
            'name'        => 'Core',
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
            'Ayongecat\Core\Components\MyComponent' => 'myComponent',
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
            'ayongecat.core.some_permission' => [
                'tab' => 'Core',
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
        // return []; // Remove this line to activate

        return [
            'core' => [
                'label'       => 'Ayongecat',
                'url'         => Backend::url('ayongecat/core/banks'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ayongecat.core.*'],
                'order'       => 500,

                'sideMenu' => [
                    'banks' => [
                        'label'       => 'Rekening',
                        'url'         => Backend::url('ayongecat/core/banks'),
                        'icon'        => 'icon-bank',
                        'permissions' => ['ayongecat.core.*'],
                        'order'       => 500,
                    ],

                    'programs' => [
                        'label'       => 'Program',
                        'url'         => Backend::url('ayongecat/core/programs'),
                        'icon'        => 'icon-star',
                        'permissions' => ['ayongecat.core.*'],
                        'order'       => 500,
                    ],

                    'contacts' => [
                        'label'       => 'Pesan Masuk',
                        'url'         => Backend::url('ayongecat/core/contacts'),
                        'icon'        => 'icon-envelope',
                        'permissions' => ['ayongecat.core.*'],
                        'order'       => 500,
                    ],
                ]
            ],
        ];
    }
}
