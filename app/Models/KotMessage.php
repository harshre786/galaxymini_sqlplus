<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KotMessage extends Model
{
    protected $table = 'kotmessage'; // 👈 exact table name

    protected $primaryKey = 'code'; // 👈 PK is code

    public $timestamps = false; // 👈 kyunki created_at / updated_at nahi hai

    protected $fillable = [
        'description',
        'isSynced',
        'addDate',
        'updateDate',
    ];
}
