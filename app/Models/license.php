<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'license';

    protected $primaryKey = 'license_id';

    public $timestamps = false; // created_at / updated_at nahi hai

    protected $fillable = [
        'macaddress',
        'userid',
        'deviceid',
        'subscriberid',
        'created_date',
    ];
}
