<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;
    protected $fillable = [
        'national_local_government_code',
        'type_value',
        'type',
        'name',
        'address',
        'postal_code',
        'longitude',
        'latitude',
        'area'
    ];
}
