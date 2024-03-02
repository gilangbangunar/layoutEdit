<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'tb_service';

    protected $fillable = [
        'id',
        'path_icon',
        'title',
        'status',
        'href',
        'created_at',
        'updated_at'
    ];
}
