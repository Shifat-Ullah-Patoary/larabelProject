<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPageSetting extends Model
{
    protected $fillable = [
        'hero_badge',
        'hero_title_part_1',
        'hero_title_part_2',
        'hero_description',
        'hero_bg_image',
        'story_badge',
        'story_title',
        'story_description',
        'story_features',
        'mission_title',
        'mission_description',
        'mission_image',
        'founder_name',
        'founder_designation',
        'founder_bio_1',
        'founder_bio_2',
        'founder_quote',
        'founder_image',
    ];
}
