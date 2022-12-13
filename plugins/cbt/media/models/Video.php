<?php namespace Cbt\Media\Models;

use Model;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','desc'];

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_media_video';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
      public $attachOne = [
    'preview' => 'System\Models\File'
  ];
    
}
