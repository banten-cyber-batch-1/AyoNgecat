<?php namespace Ayongecat\Core\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Banktypes Back-end Controller
 */
class Banktypes extends Controller
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
        BackendMenu::setContext('Ayongecat.Core', 'core', 'banktypes');
    }
}
