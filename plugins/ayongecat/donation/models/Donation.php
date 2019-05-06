<?php namespace Ayongecat\Donation\Models;

use Model;

/**
 * Donation Model
 */
class Donation extends Model
{

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'  => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'value' => 'required|numeric',
    ];

    public $attributeNames = [
        'name'  => 'nama',
        'phone' => 'telepon',
        'email' => 'email',
        'value' => 'donasi',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_donation_donations';

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
        ],
        'bank' => [
            'Ayongecat\Bank\Models\Bank',
            'key'      => 'bank_id',
            'otherKey' => 'id'
        ],
    ];
    public $belongsToMany = [];
    public $morphTo       = [];
    public $morphOne      = [];
    public $morphMany     = [];
    public $attachOne     = [
        'attachment' => ['System\Models\File']
    ];
    public $attachMany    = [];
}
