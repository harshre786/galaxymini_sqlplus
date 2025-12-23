<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KotGroup extends Model
{
    protected $table = 'kotgroup'; // 👈 exact table name (phpMyAdmin wala)

    protected $primaryKey = 'kotgroup_id'; // 👈 PK

    public $timestamps = false; // created_at / updated_at nahi hai

    protected $fillable = [
        'sname',
        'description',
        'status',
        'created_by',
        'created_date',
        'company_id',
    ];
}
