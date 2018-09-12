<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationRegion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'location_regions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias','name','translit',
        'type','available',
    ];

    /**
     * Get the administrative center record associated with the region.
     */
    public function administrativeCenter()
    {
        return $this->hasOne('App\LocationRegionCenter', 'region_id');
    }

}
