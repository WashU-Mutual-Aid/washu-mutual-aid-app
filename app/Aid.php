<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Aid extends Model
{
    use HasTrixRichText, SoftDeletes;

    protected $guarded = [];
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

    public function trixRender()
    {
        return optional($this->trixRichText->first())->content;
    }

    public function trixImageRender($field)
    {
        return $this->trixAttachments->where('field', $field)->first()->attachment;
    }
}
