<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurss extends Model
{
    protected $fillable = [
        'title',
        'text',
        'banner',
        'count',
     ];
     
}
