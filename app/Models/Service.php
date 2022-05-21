<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    use Translatable;


    protected $guarded = [];

    public $translatedAttributes = ['name', 'desc'];

    protected $appends = ['dir','image_path'];

    public $timestamps = false;

    public function getDirAttribute() {

        $sulg = $this->slug;

        return str_replace(' ', '_', $sulg);

    } // end of slug dir

    public function getImagePathAttribute () {

        return asset('uploads/services/' . $this->image);

    } // end of append iamge
}
