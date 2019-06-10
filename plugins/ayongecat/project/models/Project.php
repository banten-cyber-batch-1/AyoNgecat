<?php namespace Ayongecat\Project\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'program'  => 'required',
        'name'     => 'required',
        'location' => 'required',
        'content'  => 'required',
    ];

    public $attributeNames = [
        'program'  => 'program',
        'name'     => 'nama',
        'location' => 'lokasi',
        'content'  => 'konten',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $jsonable = ['cashflow_in', 'cashflow_out'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_project_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne        = [];
    public $hasMany       = [];
    public $belongsTo     = [
        'program' => [
            'Ayongecat\Program\Models\Program',
            'key'      => 'program_id',
            'otherKey' => 'id'
        ]
    ];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [
        'picture' => ['System\Models\File']
    ];
    public $attachMany    = [
        'before' => ['System\Models\File'],
        'after'  => ['System\Models\File'],
    ];

    public function beforeSave()
    {
        $this->slug = str_slug($this->name);
    }
}
