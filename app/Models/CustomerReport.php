<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReport extends Model
{
    use HasFactory;

    protected $table = 'customer_reports';

    protected $fillable = [
        'customer',
        'bill_no',
        'total_item',
        'amount',
        'cgst',
        'sgst',
        'discount',
        'total_amount',
        'order_date',
        'payment_mode',
    ];
}
