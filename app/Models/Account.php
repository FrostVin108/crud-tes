<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'Account';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_name',
        'user_email',
        'user_password',
    ];
}
