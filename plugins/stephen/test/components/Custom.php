<?php namespace Stephen\Test\Components;

use Cms\Classes\ComponentBase;

class Custom extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Custom Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getTest(){
        return 'hello world 2';
    }
}
