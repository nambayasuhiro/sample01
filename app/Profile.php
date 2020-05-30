<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'explanation',
        'about_me',
        'php_laravel',
        'html_css',
        'wix',
        'marketing',
];
}
