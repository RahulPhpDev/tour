<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function getSrcAttribute($value)
    {
        return  Str::replaceFirst('public/', '/storage/', $value);
    }

}
