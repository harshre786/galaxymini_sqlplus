<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqVideo extends Model
{
    protected $table = 'tbl_faq_video'; // 👈 exact table name

    protected $primaryKey = 'faq_video_id'; // 👈 primary key

    public $timestamps = false; // created_at / updated_at nahi hai

    protected $fillable = [
        'faq_video_title',
        'faq_video_url',
    ];
}
