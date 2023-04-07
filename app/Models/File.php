<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class File extends Model
{
    use HasFactory;

    public $table = "reference";
    protected $fillable = [
        'class',
        'teacher_name',
        'type',
        'unit_number',
        'path'
    ];


}