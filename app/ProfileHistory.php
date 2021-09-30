<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $guarded = array('id');
    protected $table = '_profile_histories';

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
