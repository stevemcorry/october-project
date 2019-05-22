<?php namespace Stephen\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Stephen\Test\Models\Person as P;

/**
 * Person Back-end Controller
 */
class Person extends Controller
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

        BackendMenu::setContext('Stephen.Test', 'test', 'person');
    }

    public function getLadies(){

        $people = P::all();

        return $people;

    }
}
