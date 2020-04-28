<?php

namespace App\Models;

class User
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'nickname', 'name',
        'email', 'token', 'refresh_token',
        'expires_in', 'avatar', 'user',
        'access_token_response_body'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'token', 'refresh_token',
    ];
}
