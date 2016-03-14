<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  public function todo()
  {
    return $this->belongsTo(Todo::class);
  }
}