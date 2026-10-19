<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'travel_image',
        'transport_image',
        'construction_image',
        'button_text',
        'button_link',
        'travel_title',
        'travel_description',
        'transport_title',
        'transport_description',
        'construction_title',
        'construction_description',
    ];
}
