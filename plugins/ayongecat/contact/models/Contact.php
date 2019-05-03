<?php namespace Ayongecat\Contact\Models;

use Model;

/**
 * Contact Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'subject' => 'required',
        'name'    => 'required',
        'phone'   => 'required|numeric',
        'email'   => 'required|email',
        'body'    => 'required'
    ];

    public $attributeNames = [
        'subject' => 'subyek',
        'name'    => 'nama',
        'phone'   => 'telepon',
        'email'   => 'email',
        'body'    => 'pesan'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_contact_contacts';

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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
