<?php namespace BantenCyber\Contact\Models;

use Model;

/**
 * Contact Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name'    => 'required',
        'email'   => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ];

    public $attributeNames = [
        'name'    => 'nama',
        'email'   => 'email',
        'subject' => 'subyek',
        'message' => 'pesan',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bantencyber_contact_contacts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

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
