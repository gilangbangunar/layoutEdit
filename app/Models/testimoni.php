<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;
    protected $table = 'tb_testimoni';

    protected $fillable = [
        'id',
        'name',
        'desc',
        'status',
        'created_at',
        'updated_at'
    ];
}
