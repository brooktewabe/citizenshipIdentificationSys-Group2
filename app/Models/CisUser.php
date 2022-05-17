<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CisUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'sex',
        'username',
        'password',
        ];
}
