<?php namespace Ayongecat\Core\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Banks Back-end Controller
 */
class Banks extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ayongecat.Core', 'core', 'banks');
    }
}
