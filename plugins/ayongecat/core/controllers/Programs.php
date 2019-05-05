<?php namespace Ayongecat\Core\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Programs Back-end Controller
 */
class Programs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $bodyClass  = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ayongecat.Core', 'core', 'programs');
    }
}
