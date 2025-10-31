<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['conference_id', 'name', 'email', 'organization', 'registered_at'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
