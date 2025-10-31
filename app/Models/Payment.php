<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['conference_id', 'purpose', 'bank_info'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
