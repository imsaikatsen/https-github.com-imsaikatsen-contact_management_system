<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactNumber extends Model


{
    protected $fillable = [
        'number',
        'user_id',
        'type',
        'contact_id'
    ];
    use HasFactory;
}
