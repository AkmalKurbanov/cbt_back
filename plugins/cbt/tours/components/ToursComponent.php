<?php namespace Cbt\Tours\Components;


use Cms\Classes\ComponentBase;

use Cbt\Tours\Models\Category;
use Cbt\Tours\Models\Tur;

/**
 * ToursComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ToursComponent extends ComponentBase
{
    /**
     * componentDetails
     */
    public function componentDetails()
    {
        return [
            'name' => 'ToursComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * defineProperties for the component
     *
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }






public function onRun() 
    {
     $this->page['categories'] = Category::active()->whereNULL('parent_id')->get();   
     $this->page['tours'] = Tur::active()->get(); 
     
      if ($this->page->id == 'tours-category') {
        $this->page['category'] = Category::where('slug', $this->param('cat_slug'))->active()->first();
       
        if(!$this->page['category']) {
          return \Response::make($this->controller->run(url: '/404')->getContent(), status:404);
        }

        $allChildrenAndSelfCategories = $this->page['category'] ->getAllChildrenAndSelf();
        $arCategories = array();

        foreach($allChildrenAndSelfCategories as $item) {
          $arCategories[] = $item->id;
        }
      
         $this->page['tours'] = Tur::whereHas('category', function($query) use ($arCategories){
          $query->whereIn('category_id', $arCategories);
        })->get();
        
      }elseif($this->page->id == 'tours-tour') {
        $this->page['category'] = Category::where('slug', $this->param('cat_slug'))->active()->first();
        if(!$this->page['category']) {
          return \Response::make($this->controller->run(url: '/404')->getContent(), status:404);
        }

        $this->page['tour'] = Tur::where('slug', $this->param('tour_slug'))->first();
        if(!$this->page['tour']) {
          return \Response::make($this->controller->run(url: '/404')->getContent(), status:404);
        } 

      }elseif($this->page->id == 'index') {
        $this->page['category'] = Category::where('slug', $this->param('cat_slug'))->active()->first();
        if(!$this->page['category']) {
          return \Response::make($this->controller->run(url: '/404')->getContent(), status:404);
        }

        $this->page['tour'] = Tur::where('slug', $this->param('tour_slug'))->first();
        if(!$this->page['tour']) {
          return \Response::make($this->controller->run(url: '/404')->getContent(), status:404);
        } 

      }
   




}
}
