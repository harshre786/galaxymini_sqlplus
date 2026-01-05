<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelledBill extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'cancelled_bills';

    // Primary key
    protected $primaryKey = 'id';

    // Mass assignable fields
    protected $fillable = [
        'username',
        'bill_no',
        'total_item',
        'amount',
        'cgst',
        'sgst',
        'discount',
        'total',
        'bill_date',
        'mode',
        'reason',
    ];

    // If you want, you can disable timestamps if not used
    // public $timestamps = false;
}
