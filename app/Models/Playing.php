<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playing extends Model
{
    use HasFactory;

    public function films()
    {
        return $this->belongsTo(Film::class);
    }
}
