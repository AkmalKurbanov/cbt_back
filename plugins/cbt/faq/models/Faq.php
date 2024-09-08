<?php namespace Cbt\Faq\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_faq_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
