<?php namespace Ayongecat\Setting\Models;

use Model;

/**
 * Appearance Model
 */
class Appearance extends Model
{
    public $implement      = ['System.Behaviors.SettingsModel'];
    public $settingsCode   = 'ayongecat_setting_appearances';
    public $settingsFields = 'fields.yaml';

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ayongecat_setting_appearances';

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
    public $attachMany    = [
        'banner' => ['System\Models\File']
    ];
}
