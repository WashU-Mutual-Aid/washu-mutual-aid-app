<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class PaymentProfile extends Model
{
    protected $guarded = [];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::saving(function ($profile) {
            if (Str::startsWith($profile->username, '@')) {
                $profile->username = Str::replaceFirst('@', '', $profile->username);
            }
        });

        static::saved(function ($profile) {
            if ($profile->username === '@') {
                $profile->delete();
            }
        });
    }
}
