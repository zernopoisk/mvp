<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classiness extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classiness';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias','name','translit','number'
    ];
}
