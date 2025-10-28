<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable =[
        'user_id',
        'account_holder_name',
        'bank_name',
        'account_number',
        'ifsc_code',
        'branch_address',
        'branch_city',
        'branch_state',
        'branch_country',
        'upi_id'
    ];
}
