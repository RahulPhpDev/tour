<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public $timestamps = false;

    protected static function boot() {
        parent::boot();

        self::created( function ($model) {
            $model->slug = Str::slug($model->type.'_'.$model->id, '-');
            $model->save();
        });
    } 

   public function package() {
    return $this->belongsToMany(Package::class);
   }
    
}
