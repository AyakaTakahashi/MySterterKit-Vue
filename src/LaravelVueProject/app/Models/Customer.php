<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_name',
        'first_name',
        'sex',
        'postcode',
        'prefecture',
        'city',
        'address',
        'phone_number',
        'birthday',
        'picture',
        'notes'
    ];
}
