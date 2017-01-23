<?php

namespace PublicaSalta;

use Illuminate\Database\Eloquent\Model;
use PublicaSalta\User;


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
}
