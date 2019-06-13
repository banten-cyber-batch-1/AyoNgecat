<?php namespace Ayongecat\Project\Components;

use Cms\Classes\ComponentBase;

use Ayongecat\Project\Models\Project as ProjectModels;

class ProjectDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProjectDetail Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'parameter' => [
                'name'        => 'Parameter property',
                'description' => 'No description provided yet...'
            ]
        ];
    }

    public function onRun()
    {
        $project = $this->getCurrent();
        if(!$project) {

        }

        $this->page['project'] = $project;
    }

    public function getCurrent()
    {
        return ProjectModels::whereSlug($this->property('parameter'))->first();
    }
}
