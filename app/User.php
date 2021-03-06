<?php

namespace App;
use App\Profile;
use App\Todo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function todos()
    {
      return $this->hasMany(Todo::class);
    }

    public function profile()
    {
      return $this->hasMany(Profile::class);
    }

}
