<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;
   protected $guarded = [];
   protected $with = ['image', 'category', 'itinerary'];

    protected $appends = ['completed', 'facility_list'];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_admin' => 'integer',
    ];

    protected static function boot() {
        parent::boot();
        self::created(function ($model) {
            $model->slug = Str::slug($model->title.'_'.$model->id, '-');
            $model->save();
        });
    }
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
       $this->attributes['facility'] = implode(',', $value);
    }

    public function getFacilityListAttribute()
    {
        return Facility::whereIn('id', explode(',', $this->facility))->get();
    }
    public function facilities()
    {
        $facilityId = $this->getOriginal('facility');
        return Facility::whereIn('id', explode(',', $facilityId))->get();
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
