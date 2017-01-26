<?php

namespace PublicaSalta;

use Illuminate\Database\Eloquent\Model;
use PublicaSalta\User;
use PublicaSalta\Category;


class Ad extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
