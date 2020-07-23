<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'zip', 'npn', 'phone', 'sunfire_access',
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
        'sunfire_access' => 'boolean',
        'is_admin' => 'boolean',
    ];

    public function getUserThirdPartyLink()
    {
        $user = Auth::user();

        return DB::table('oauth_clients')
            ->select('oauth_clients.*')
            ->join('thirdparty_users', 'thirdparty_users.thirdparty_id', '=', 'oauth_clients.id')
            ->where('thirdparty_users.user_id', Auth::user()->id)
            ->get()
            ->filter(function ($link) use ($user) {
                if ($link->name == 'Sunfire' && ! $user->sunfire_access) {
                    return false;
                }

                return true;
            });
    }
}
