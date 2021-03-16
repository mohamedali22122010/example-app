<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name' , 'building_id' , 'no_of_bathrooms',  'no_of_bedrooms', 'no_of_guestrooms'];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Many-to-Many relations with Promotion model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'promotion_properties');
    }


}
