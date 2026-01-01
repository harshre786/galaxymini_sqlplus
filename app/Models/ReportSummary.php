<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportSummary extends Model
{
    use HasFactory;

    protected $table = 'report_summaries';

    protected $fillable = [
        'user',
        'total_bills',
        'total_amount',
        'cash',
        'upi',
        'order_date',
    ];
}
