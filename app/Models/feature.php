<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory;
    protected $table = 'tb_feature';
    
    protected $fillable = [
        'id',
        'path_img',
        'status',
        'deskripsi',
        'created_at',
        'updated_at',
        'href'
    ];
}
