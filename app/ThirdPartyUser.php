<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdPartyUser extends Model
{
    protected $table = 'thirdparty_users';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'thirdparty_id',
    ];
}
