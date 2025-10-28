<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KycDetail extends Model
{
    protected $fillable = [
        'user_id',
        'document_type',
        'document_number',
        'document_front_path',
        'document_back_path',
        'status_id',
        'admin_remarks',
        'varified_at'

    ];
}
