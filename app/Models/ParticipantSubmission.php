<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParticipantSubmission extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['conference_id', 'title', 'description', 'date', 'type'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
