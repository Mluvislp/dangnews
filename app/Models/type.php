<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lang',
        'ten'
    ];
}