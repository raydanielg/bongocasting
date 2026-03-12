<?php

namespace Modules\Talent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Talent\Database\Factories\ArtistFactory;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ArtistFactory
    // {
    //     // return ArtistFactory::new();
    // }
}
