<?php namespace BantenCyber\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * Contact Plugin Information File
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
            'name'        => 'Contact',
            'description' => 'No description provided yet...',
            'author'      => 'BantenCyber',
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
            'BantenCyber\Contact\Components\Contact' => 'Contact',
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
            'bantencyber.contact.some_permission' => [
                'tab' => 'Contact',
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
            'contact' => [
                'label'       => 'Contact',
                'url'         => Backend::url('bantencyber/contact/contacts'),
                'icon'        => 'icon-envelope',
                'iconSvg'     => 'plugins/bantencyber/contact/assets/images/icon-envelope.svg',
                'permissions' => ['bantencyber.contact.*'],
                'order'       => 910,

                'sideMenu' => [
                    'contacts' => [
                        'label'       => 'Kotak Masuk',
                        'url'         => Backend::url('bantencyber/contact/contacts'),
                        'icon'        => 'icon-list',
                        'permissions' => ['bantencyber.contact.*'],
                        'order'       => 910,
                    ],
                ]
            ],
        ];
    }
}
