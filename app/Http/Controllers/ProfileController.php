<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Http\Requests;

class ProfileController extends Controller
{

    public function start()
    {
        return view('profile.create');
    }

    public function store(Request $request, User $user)
    {
      $this->validate($request, [
        'bio' => 'required',
      ]);

      $request->user()->profile()->create([
        'bio' => $request->bio,
      ]);

      return back();
    }

    public function edit(Profile $profile)
    {
      return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
      $profile->update($request->all());

      return back();
    }
}
