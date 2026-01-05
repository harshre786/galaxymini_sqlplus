<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemwiseReport extends Model
{
    protected $table = 'itemwise_reports';

    protected $fillable = [
        'username',
        'item_name',
        'items_sold',
        'rate',
        'amount',
        'cgst',
        'sgst',
        'total_amt',
        'company',
        'report_date'
    ];
}
