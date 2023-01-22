<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kar extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Age',
        'Address',
        'TLP',
    ];
}
