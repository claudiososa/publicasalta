<?php

namespace PublicaSalta;

use Illuminate\Database\Eloquent\Model;
use PublicaSalta\Category;

class SubCategory extends Model
{
    //
    public function subcategory()
    {
      return $this->belongsTo(Category::class);
    }
}
