<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'input_address', 'order_id', 'code', 'status', 'coin', 'created_at', 'updated_at', 'qrcode', 'txt',
    ];
}
