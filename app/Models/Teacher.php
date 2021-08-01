<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = [
            'name', 'email','phone_no','class_id','password','created_at', 'updated_at'
        ];
        // var_dump($fillable);exit();
}
