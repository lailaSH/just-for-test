<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasFactory;

    public $table = "students";
   
    public function scopeNumber($query, $arg)
    {
        return $query->where('id', $arg);
    }
}