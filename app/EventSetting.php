<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventSetting extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are cannot mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
