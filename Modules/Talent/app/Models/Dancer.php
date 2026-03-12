<?php

namespace Modules\Talent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Talent\Database\Factories\DancerFactory;

class Dancer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): DancerFactory
    // {
    //     // return DancerFactory::new();
    // }
}
