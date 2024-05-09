<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = ['name', 'image'];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class)->withPivot('repetitions');
    }

    use HasFactory;
}
