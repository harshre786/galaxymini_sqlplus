<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';   // ⚠️ singular table name

    protected $primaryKey = 'code';

    public $incrementing = false; // because code is manual
    protected $keyType = 'int';

    public $timestamps = false; // addDate / updateDate alag hai

    protected $fillable = [
        'code',
        'name',
        'departmentCode',
        'rate1',
        'rate2',
        'unit',
        'isActive',
        'gSTCODE',
        'openPrice',
        'shortName',
        'sortNo'
    ];
}
