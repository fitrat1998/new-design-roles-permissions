<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Excursion extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['conference_id', 'purpose', 'content'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
