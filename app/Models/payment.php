<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    protected $fillable = [
        'type',
        'status',
        'created_by',
        'created_date',
        'updated_by',
        'updated_date',
    ];

    public $timestamps = false; // ✅ VERY IMPORTANT
}