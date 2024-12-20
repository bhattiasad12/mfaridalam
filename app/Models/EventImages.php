<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventImages extends Model
{
    protected $fillable = ['event_id', 'image_name', 'image_path'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
