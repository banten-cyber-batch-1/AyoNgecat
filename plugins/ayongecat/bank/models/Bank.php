<?php namespace Ayongecat\Bank\Models;

use Model;

/**
 * Bank Model
 */
class Bank extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'type'   => 'required',
        'name'   => 'required',
        'number' => 'required|numeric',
    ];

    public $attributeNames = [
        'type'   => 'jenis bank',
        'name'   => 'nama pemilik',
        'number' => 'nomor rekening',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_bank_banks';

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
        'type' => [
            'Ayongecat\Bank\Models\Type',
            'key'      => 'type_id',
            'otherKey' => 'id'
        ]
    ];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [];
    public $attachMany    = [];
}
