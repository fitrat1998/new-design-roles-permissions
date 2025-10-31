<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['conference_id', 'speaker_id', 'start_date', 'end_date', 'type'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}
