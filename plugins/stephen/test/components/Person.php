<?php namespace Stephen\Test\Components;

use Cms\Classes\ComponentBase;
use Stephen\Test\Models\Person as P;

class Person extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Person Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){

        $this->page['ladies'] = P::orderby('age')->get();

    }
}
