<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title'];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
