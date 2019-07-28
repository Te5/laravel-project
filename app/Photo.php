<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Photo extends Model
{
    //
    protected $fillable = ['path'];
    protected $uploads = '/images/';

    public function getPathAttribute($value)
    {
    	return $this->uploads. $value;
    }


}
