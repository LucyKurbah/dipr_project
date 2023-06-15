<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisement';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ad_type()
    {
        return $this->belongsTo(AdType::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function ad_category()
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function assigned_news()
    {
        return $this->hasMany(AssignedNews::class);
    }

    public function app_track()
    {
        return $this->hasMany(AppTrack::class);
    }

    public function bill()
    {
        return $this->hasOne(Bill::class);
    }
}
