<?php

namespace App\Http\Controllers;

use App\Aid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $requests = Aid::with('user', 'trixRichText')->where('require_account', '=', 0)->orderBy('needed_by')->paginate(15);
//        $s = Str::plural('');
        return view('welcome', compact('requests'));
    }
}
