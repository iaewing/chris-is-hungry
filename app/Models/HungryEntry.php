<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HungryEntry extends Model
{
    /** @use HasFactory<\Database\Factories\HungryEntryFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
}
