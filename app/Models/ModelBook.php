<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='books';

    protected $fillable = [
        'name',
        'email',
    ];

}
