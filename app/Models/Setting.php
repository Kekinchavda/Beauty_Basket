<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * Summary of fillable
     * var string $key
     * var string $value
     */
    protected $fillable = ['key', 'value'];
}
    