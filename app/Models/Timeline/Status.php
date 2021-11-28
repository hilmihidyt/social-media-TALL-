<?php

namespace App\Models\Timeline;

use App\Models\User;
use Database\Factories\StatusFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['hash','body'];

    protected static function newFactory()
    {
        return StatusFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPublishedAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
