<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billwise extends Model
{
    protected $table = 'billwise';

    protected $fillable = [
        'bill_no',
        'total_item',
        'subtotal',
        'cgst',
        'sgst',
        'discount',
        'total_amt',
        'order_date',
        'mode'
    ];
}
