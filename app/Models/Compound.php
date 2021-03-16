<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compound extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name' , 'district_id'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function buildings()
    {
        return $this->hasMany(Building::class);
    }


}
