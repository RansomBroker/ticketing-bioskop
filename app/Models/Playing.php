<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playing extends Model
{
    use HasFactory;

    protected $fillable = ['film_id', 'theater_id', 'studio_id', 'start_time', 'duration', 'price'];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }

}
