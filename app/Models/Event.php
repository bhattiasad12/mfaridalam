<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description'];

    public function images()
    {
        return $this->hasMany(EventImages::class);
    }
}
