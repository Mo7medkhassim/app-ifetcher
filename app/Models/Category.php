<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use Translatable;


    // protected $guard = [];
    public $translatedAttributes = ['name', 'desc'];

    protected $appends = ['brand_path','image_path'];

    // protected $hidden = [];

    public function services () {

        return $this->hasMany(Service::class);
    } // end of services

    public function stores () {

        return $this->hasMany(Store::class);
    } // end of stores

    public function getBrandAttribute () {

        return asset('uploads/category/' . $this->brand);

    } // end of append iamge

    public function getImagePathAttribute () {

        return asset('uploads/category/' . $this->image);

    } // end of append iamge
}
