<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    public $table='contacts';
    public $fillable = ['contact_name', 'contact_email', 'contact_phone', 'contact_subject', 'contact_message'];
    public $timestamps= true;
}
