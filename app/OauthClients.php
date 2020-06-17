<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OauthClients extends Model
{
    protected $table = 'oauth_clients';

    public function getOauthClientById($clientId)
    {
        return $this
                ->where('password_client', '=', 0)
                ->where('personal_access_client', '=', 0)
                ->where('personal_access_client', '=', 0)
                ->where('revoked', '=', 0)
                ->where('id', '=', $clientId)
                ->first();
    }

    public function getOauthClientsByUserId($userID)
    {
        return $this
                ->where('password_client', '=', 0)
                ->where('personal_access_client', '=', 0)
                ->where('personal_access_client', '=', 0)
                ->where('revoked', '=', 0)
                ->where('user_id', '=', $userID)
                ->get();
    }
}
