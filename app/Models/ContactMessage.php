<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'zip_code', 'interest', 'receive_newsletter', 'phone'];
}
