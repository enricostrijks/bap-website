<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    protected $fillable = ['title', 'description', 'general', 'privacy', 'user_id', 'meme'];
}
