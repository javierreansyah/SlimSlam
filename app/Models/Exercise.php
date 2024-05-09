<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class)->withPivot('repetitions');
    }

    use HasFactory;
}
