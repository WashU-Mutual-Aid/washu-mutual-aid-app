<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aid extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'needed_by' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function amountInDollars()
    {
        return '$'.number_format($this->amount / 100, 2);
    }
}
