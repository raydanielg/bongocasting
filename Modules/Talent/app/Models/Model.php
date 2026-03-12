<?php

namespace Modules\Talent\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Talent\Database\Factories\ModelFactory;

class Model extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ModelFactory
    // {
    //     // return ModelFactory::new();
    // }
}
