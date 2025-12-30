<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    protected $table = 'company_users';   // ⚠️ change if table name different

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'exp_date',
        'status',
        'company_name',
    ];
}
