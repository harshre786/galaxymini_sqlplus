<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatewiseReport extends Model
{
    protected $table = 'datewise_reports';

    protected $fillable = [
        'username',
        'total_bill',
        'amount',
        'cgst',
        'sgst',
        'discount',
        'total_amount',
        'read_date'
    ];
}
