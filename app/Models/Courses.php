<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    public function class()
    {
        $this->hasMany(Classes::class);
    }
    public function user()
    {
        $this->hasMany(User::class);
    }
}
