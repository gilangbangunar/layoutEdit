<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_menubar extends Model
{
    use HasFactory;
    protected $table = 'tb_menubar';
    
    protected $fillable = [
        'id_menu',
        'menu',
        'parent',
        'sort',
        'deskripsi',
        'created_at',
        'updated_at',
        'is_parent',
        'href'
    ];
}
