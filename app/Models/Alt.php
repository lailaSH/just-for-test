<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Alt extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'name'
    ];
    protected $appends = ['full_name'];
    protected $guarded = [];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function getFullNameAttribute()
    {
        return $this->name . ' ' . 'last';
    }
}
