<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uid',
        'name',
        'last_name',
        'cellphone',
        'photo',
        'email',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
