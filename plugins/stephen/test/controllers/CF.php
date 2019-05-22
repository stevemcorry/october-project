<?php namespace Stephen\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Faker;

/**
 * C F Back-end Controller
 */
class CF extends Controller
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

        BackendMenu::setContext('Stephen.Test', 'test', 'cf');
    }

    public function getTest(){
        return 'hello world 2';
    }
    public function fakerTest(){

        $faker = Faker\Factory::create();
        dd($faker->phoneNumber);
        return $faker;

    }
}
