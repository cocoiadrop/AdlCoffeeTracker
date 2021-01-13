<?php

namespace App\Models\LocalityData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'postcode'
    ];

    /**
     * The attributes that are hidden from public arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];
}
