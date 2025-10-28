<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenealogyTree extends Model
{

    protected $fillable =[
        'user_id',
        'sponsor_id',
        'referrer_id',
        'position'
    ];


}
