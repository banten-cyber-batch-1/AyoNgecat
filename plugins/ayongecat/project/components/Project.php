<?php namespace Ayongecat\Project\Components;

use Cms\Classes\ComponentBase;

use Ayongecat\Project\Models\Project as ProjectModels;

class Project extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Project Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll()
    {
        return ProjectModels::orderBy('created_at', 'desc')->get();
    }
}
