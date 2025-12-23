<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';     // exact table name

    protected $primaryKey = 'code';

    public $timestamps = false;    // created_at / updated_at nahi hai

    protected $fillable = [
        'name',
        'departmentCode',
        'purchase_price',
        'rate1',
        'rate2',
        'cost',
        'decimalMeasurement',
        'isActive',
        'gSTCODE',
        'openPrice',
        'shortName',
        'reminderQty',
        'unit',
        'sortNo',
        'noDiscount',
    ];
}
