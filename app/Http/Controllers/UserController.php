<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfileRequest;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('me.show', compact('user'));
    }

    public function update(UpdateUserProfileRequest $request)
    {
        auth()->user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'affiliation' => $request->input('affiliation'),
            'current_location' => $request->input('current_location'),
        ]);
        return back()->with('status', 'Your profile been updated.');
    }
}
