<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Photo extends Model
{
    //
    protected $url = 'storage/app/avatars/';
    protected $fillable = ['path'];

    public function getPathAttribute($value)
    {
    	$value = 'app/avatars/'. $value;
    	return Storage::url($value);
    }
}
