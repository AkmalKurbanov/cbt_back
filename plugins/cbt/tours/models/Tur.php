<?php namespace Cbt\Tours\Models;

use Model;

/**
 * Model
 */
class Tur extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sluggable;

   
    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    ];
    
    public $translatable = ['title','desc','duration','difficulty','season','attraction','requirement','detail_desc','height','place'];
    
    

    public $slugs = ['slug' => 'title'];

    protected $dates = ['deleted_at'];
    protected $jsonable = ['detail_desc'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbt_tours_tury';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
    'preview' => 'System\Models\File',
  ];
  public $attachMany = [
    'gallery' => 'System\Models\File'
  ];
  
  // public $belongsToMany = [
  //   'categories' => [\Cbt\Tours\Models\Category::class, 'table' => 'cbt_tours_category_tur'],
  //   ];


  public $belongsTo = [
    'category' => [\Cbt\Tours\Models\Category::class, 'table' => 'cbt_tours_tury'],
    ];

    public function category() {
    return $this->belongsTo(Category::class); // don't forget to add your full namespace
    $categoryName = Tur::with('category')->get();
}
  

public function scopeFilterCategories($query, $filtered) {
  return $query->whereHas('category', function($q) use ($filtered){
$q->whereIn('category_id', $filtered);
  }); 
}





public function scopeActive($query)
{
    return $query->where('is_active', true);
}
public function scopePopular($query)
{
    return $query->where('is_popular', true);
}
public function scopeRecomend($query)
{
    return $query->where('is_recomend', true);
}


}
