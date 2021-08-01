<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use HasFactory;
    protected $table = 'class';

     protected $fillable = [
        'name','status', 'created_at', 'updated_at'
    ];
}
