<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Eloquent;

/**
 * @mixin Builder
 * @mixin Eloquent
 */
class Task extends Model
{
    use HasFactory;
    public static function incomplete(){
        return static::where('completed',0)->get();
    }
}
