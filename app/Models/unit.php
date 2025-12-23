<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';        // exact table name

    protected $primaryKey = 'code';   // primary key

    public $timestamps = false;       // no created_at / updated_at

    protected $fillable = [
        'unit',
        'remarks',
        'status',
        'created_by',
        'created_date',
        'company_id',
    ];
}
