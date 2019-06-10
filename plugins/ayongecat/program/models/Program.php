<?php namespace Ayongecat\Program\Models;

use Model;

/**
 * Program Model
 */
class Program extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'    => 'required',
        'content' => 'required',
    ];

    public $attributeNames = [
        'name'    => 'nama',
        'content' => 'konten',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_program_programs';

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
    public $belongsTo     = [];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [
        'picture' => ['System\Models\File'],
        'brief'   => ['System\Models\File']
    ];
    public $attachMany    = [];

    public function beforeSave()
    {
        $this->slug = str_slug($this->name);
    }
}
