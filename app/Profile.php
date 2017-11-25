<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['user_id', 'state_id', 'address', 'dateOfBirth', 'lga_id']
}
