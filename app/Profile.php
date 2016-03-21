<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['bio'];
    protected $table = 'profile';

    public function user()
    {
      $this->belongsTo(User::class);
    }
}
