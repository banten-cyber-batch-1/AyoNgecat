<?php namespace Ayongecat\Review\Models;

use Model;

/**
 * Review Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'    => 'required',
        'role'    => 'required',
        'content' => 'required',
    ];

    public $attributeNames = [
        'name'    => 'nama',
        'role'    => 'jabatan',
        'content' => 'konten',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_review_reviews';

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
        'project' => [
            'Ayongecat\Project\Models\Project',
            'key'      => 'project_id',
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
    public $attachMany    = [];
}
