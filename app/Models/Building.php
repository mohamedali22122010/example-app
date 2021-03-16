<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Building extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name' , 'compound_id'];

    public function compound()
    {
        return $this->belongsTo(Compound::class);
    }
}
