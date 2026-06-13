<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonClickLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'action',
        'page',
        'metadata',
        'ip',
    ];

    protected $casts = [
        'metadata' => 'string',
    ];
}

