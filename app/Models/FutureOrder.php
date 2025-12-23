<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FutureOrder extends Model
{
    protected $table = 'tbl_futureorders';
    protected $primaryKey = 'futureorder_id';
    public $timestamps = false;

    protected $fillable = [
        'customerCode',
        'orderID',
        'readDate',
        'serviceCharge',
        'discountInPercent',
        'discountAmount',
        'paymentMode',
        'status',
        'reason_for_cancellation',
        'cancelled_on',
        'orderDate',
        'note'
    ];
}
