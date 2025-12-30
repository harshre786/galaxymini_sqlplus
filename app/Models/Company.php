<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $primaryKey = 'company_id';

    public $timestamps = false;

    protected $fillable = [
        'company_name',
        'status',
        'created_by',
        'created_on',
    ];
}
