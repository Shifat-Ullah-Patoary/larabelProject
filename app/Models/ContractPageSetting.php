<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractPageSetting extends Model
{
    protected $fillable = [
        'top_header',
        'header_description',
        'address_description',
        'phone_number',
        'email',
        'business_our',

    ];
}
