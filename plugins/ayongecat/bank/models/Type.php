<?php namespace Ayongecat\Bank\Models;

use Model;

/**
 * Type Model
 */
class Type extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'  => 'required',
        'short' => 'required',
    ];

    public $attributeNames = [
        'name'  => 'nama',
        'short' => 'singkatan',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_bank_types';

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
    public $attachOne     = [];
    public $attachMany    = [];
}
