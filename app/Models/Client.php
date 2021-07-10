<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primarykey='id';
    protected $fillable = [
        'name',
        'logo',
        'website_url',
        'active',
    ];
}
