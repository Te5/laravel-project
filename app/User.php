<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\File;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active', 'photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function saveImageIfProvided($request)
    {

        //the function saves image into the images folder and returns modified request data
        $input = $request->all();
        /* if user already has a photo, delete it */
        if($this->photo)
        {

            File::delete(public_path(). $this->photo->path);
        }

        if($file = $request->file('uploadedFile'))
        {
            $fileName = time() . '-'.$file->getClientOriginalName();
            $file->move('images', $fileName);
            $photo = Photo::create(['path'=>$fileName]);
            $input['photo_id'] = $photo->id;
        }
        return $input;
    }
}
