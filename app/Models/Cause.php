<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;

class cause extends Model
{ 
    use HasFactory, SoftDeletes;
    protected $guarded=[];

    protected $fillable=[ 
        'cause_name', 
        'cause_image', 
        'category_id',
        'cause_description', 
        'cause_goal', 
        'cause_currentValue', 
        'total_amount',
        'cause_status', 
        'cause_address', 
        'cause_completionDate'
     ];

        public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
        }
}
