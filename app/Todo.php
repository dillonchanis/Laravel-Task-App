<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }
}
