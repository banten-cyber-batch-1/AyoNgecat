<?php namespace Ayongecat\Program\Components;

use Cms\Classes\ComponentBase;

use Ayongecat\Program\Models\Program as ProgramModels;

class Program extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Program Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll()
    {
        return ProgramModels::get();
    }

    public function onView()
    {
        $this->page['program'] = ProgramModels::find(post('id'));
    }
}
