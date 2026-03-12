<?php

namespace Modules\Contract\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Contract\Database\Factories\ContractFactory;

class Contract extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): ContractFactory
    // {
    //     // return ContractFactory::new();
    // }
}
