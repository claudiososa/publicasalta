<?php

namespace PublicaSalta;

use Illuminate\Database\Eloquent\Model;
use PublicaSalta\Ad;
use PublicaSalta\SubCategory;

class Category extends Model
{
    //
    public function ads()
    {
      return $this->hasMany(Ad::class,"category_id");
    }

    public function subcategory()
    {
      return $this->hasMany(SubCategory::class,"category_id");
    }
}
