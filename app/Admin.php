<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'admin_name', 'admin_email', 'admin_password','created_at',
    ];
}