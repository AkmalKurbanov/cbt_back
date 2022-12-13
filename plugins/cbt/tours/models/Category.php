<?php namespace Cbt\Tours\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\NestedTree;

    use \October\Rain\Database\Traits\Sluggable;
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title'];

    public $slugs = ['slug' => 'title'];

    protected $dates = ['deleted_at'];



    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_tours_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

public $attachOne = [
    'img' => 'System\Models\File',
    'icon' => 'System\Models\File',
    'iconDark' => 'System\Models\File',
];


  public $hasMany = [
        'tury' => [
            \Cbt\Tours\Models\Tur::class,
             'table' => 'cbt_tours_categies']
    ];
 


public function scopeActive($query)
{
    return $query->where('is_active', true);
}

}
