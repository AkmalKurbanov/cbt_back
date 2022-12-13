<?php namespace Cbt\Rent\Models;

use Model;

/**
 * Model
 */
class Rent extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    ];
    
    public $translatable = ['title'];
    
    

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_rent_kit';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
        public $attachOne = [
    'icon' => 'System\Models\File',
    
  ];
}
