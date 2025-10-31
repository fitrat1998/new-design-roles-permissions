<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaker extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['name', 'topic', 'bio', 'conference_id'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
