<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // protected $appends = ['stored_at'];

    /**
     * Accessor to format created_at timestamp as a human readable relative
     * time string.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // Laravel new accessor and mutator syntax
    // public function storedAt(): Attribute
    // {
    //     return new Attribute(
    //         get: fn() => $this->created_at->diffForHumans(),
    //     );
    // }

    // * Laravel 6 accessor and mutator syntax
    // public function getStoredAtAttribute()
    // {
    //     return $this->created_at->diffForHumans();
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
