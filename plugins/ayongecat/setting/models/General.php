<?php namespace Ayongecat\Setting\Models;

use Model;

/**
 * General Model
 */
class General extends Model
{
    public $implement      = ['System.Behaviors.SettingsModel'];
    public $settingsCode   = 'ayongecat_setting_generals';
    public $settingsFields = 'fields.yaml';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_setting_generals';

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
