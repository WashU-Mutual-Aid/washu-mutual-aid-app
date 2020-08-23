<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPaymentsController extends Controller
{
    public function update()
    {
        auth()->user()->paymentProfiles()->updateOrCreate(['type' => 'venmo'], ['username' => request()->input('venmo')]);
        auth()->user()->paymentProfiles()->updateOrCreate(['type' => 'paypal'], ['username' => request()->input('paypal')]);

        return back()->with('status', 'Your payment profiles have been updated.');

    }
}
