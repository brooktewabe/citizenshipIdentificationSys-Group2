<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizens extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'sex',
        'bday',
        'mothersname',
        'nationality',
        'birthplace',
        'occupation',
        'address',
        'religion',
        'mobile',
        'maritialstatus',
        ];
}
