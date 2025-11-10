<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'tag_id',
    ];

    // (opcional, mas bom ter)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'idea_tag');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }
    
    protected static function booted()
    {
        static::deleting(function ($idea) {
            $idea->votes()->delete();
            foreach ($idea->comments as $comment) {
                $comment->votes()->delete();
            }
            $idea->comments()->delete();
       });
    }
}
