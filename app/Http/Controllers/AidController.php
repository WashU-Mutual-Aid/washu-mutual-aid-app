<?php

namespace App\Http\Controllers;

use App\Aid;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAidRequest;

class AidController extends Controller
{
    public function store(CreateAidRequest $request)
    {
        auth()->user()->requests()->create([
            'summary' => $request->get('summary'),
            'aid-trixFields' => $request->get('aid-trixFields'),
            'attachment-aid-trixFields' => $request->get('attachment-aid-trixFields'),
            'amount' => $request->get('amount') * 100,
            'needed_by' => $request->get('date'),
            'require_account' => $request->boolean('require_account')
        ]);

        return redirect(route('home'))
            ->with('status', 'Your request has been created');
    }
}
