<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';   // exact table name

    protected $primaryKey = 'code';    // PK as per table

    public $timestamps = false;        // created_at / updated_at nahi hai

    protected $fillable = [
        'description',
        'addDate',
        'printer',
        'printerport',
        'printerdrivers',
        'code',
        'remark',
        'created_by',
        'status',
        'created_date',
        'company_id',
    ];
}
