<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAidController extends Controller
{
    public function index()
    {
        $requests = auth()->user()->requests()->with('user', 'trixRichText')->paginate();
        return view('me.requests', compact('requests'));
    }
}
