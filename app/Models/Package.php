<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Package extends Model
{
    use HasFactory, SoftDeletes;
   protected $guarded = [];
   protected $with = ['image', 'category', 'itinerary'];

    protected $appends = ['completed'];


    public function image()
    {
        return $this->morphMany(Image::class, 'image');
    }

     public function getSrcAttribute($value)
    {
        return  Str::replaceFirst('public/', '/storage/', $value);
    }
    
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }


    public function itinerary()
    {
        return $this->hasMany(Itinerary::class);
    }
    public function setFacilityAttribute($value)
    {
       $this->attribute['facility'] = implode(',', $value);
    }


    public function getCompletedAttribute()
    {
        return in_array($this->completed_step , [4,5]);
    }

    public function getHotelCityAttribute($value)
    {
        return json_decode($value, true); 
    }

}
