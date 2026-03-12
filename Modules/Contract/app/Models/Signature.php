<?php

namespace Modules\Contract\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Contract\Database\Factories\SignatureFactory;

class Signature extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): SignatureFactory
    // {
    //     // return SignatureFactory::new();
    // }
}
