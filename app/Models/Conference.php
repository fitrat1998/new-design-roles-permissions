<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conference extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = ['name', 'slug', 'location', 'language', 'date','created_by'];

     public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function excursions()
    {
        return $this->hasMany(Excursion::class);
    }

    public function informationAfters()
    {
        return $this->hasMany(InformationAfter::class);
    }

    public function participantSubmissions()
    {
        return $this->hasMany(ParticipantSubmission::class);
    }
}
