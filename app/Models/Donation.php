<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'donate_name',
        'donate_email',
        'donate_amount',
        'cause_id'
    ];
}
