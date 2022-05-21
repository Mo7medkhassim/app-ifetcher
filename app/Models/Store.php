<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    use Translatable;

    protected $guarded = [];

    public $translatedAttributes = ['name', 'desc', 'place'];

    public $timestamps = false;

    protected $appends = ['dir','image_path', 'logo_path'];

    public function category()
    {

        return $this->belongsTo(Category::class);

    } // end of category

    public function services () {

        return $this->belongsTo(Service::class);

    } // end of services

    public function getDirAttribute() {

        $slug = $this->slug;

        return str_replace(' ', '_', $slug);

    } // end of slug dir

    public function getImagePathAttribute () {

        return asset('uploads/stores/' . $this->image);

    } // end of append iamge

    public function getLogoPathAttribute () {

        return asset('uploads/stores/' . $this->logo);

    } // end of append iamge

} // end of model
