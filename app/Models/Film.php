<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = ['video', 'banner', 'trailer', 'name', 'synopsis', 'producer', 'duration', 'genre', 'type', 'release'];
}
