<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
	public $timestamps = false;
    protected $fillable = [
        'email', 'saleamt',
    ];
}
