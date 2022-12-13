<?php namespace Cbt\Rent\Models;

use Model;

/**
 * Model
 */
class PriceList extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_rent_price_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
        public $attachOne = [
    'price_list' => 'System\Models\File',
    
  ];
}
