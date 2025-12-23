<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'code';   // 👈 PK fix
    public $timestamps = false;       // 👈 no created_at / updated_at

    protected $fillable = [
    'customerCode',
    'name',
    'email',
    'mobile1',
    'company_id',
    'isActive'
];

}
