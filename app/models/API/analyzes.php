<?php

namespace App\models\API;

use Illuminate\Database\Eloquent\Model;

class analyzes extends Model
{
    protected $fillable = ['name'];

    protected $hidden = ['created_at','updated_at','id'];
}
