<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleri extends Model
{
    use HasFactory;
    protected $table = 'tb_galleri';

    protected $fillable = [
        'id',
        'path_img',
        'title',
        'status',
        'desc',
        'created_at',
        'updated_at'
    ];
}
