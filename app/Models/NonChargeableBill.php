<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonChargeableBill extends Model
{
    use HasFactory;

    protected $table = 'non_chargeable_bills';

    protected $fillable = [
        'username',
        'bill_no',
        'total_item',
        'amount',
        'cgst',
        'sgst',
        'discount',
        'total_amount',
        'order_date',
        'reason',
    ];
}
