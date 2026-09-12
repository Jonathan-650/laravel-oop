<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnimalInfo extends Model
{
    public $timestamps = false; // set this as false, if your table doesnt have created at and updated at field or you just want to populate it manually
    protected $table = 'animal_info';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'scientific_name', 'class', 'order_name', 'family', 'genus', 'description', 
        'habitat_origin', 'conservation_status', 'note'
    ];

    public static function getExamNumber6()
    {
        return AnimalInfo::select('name', 'conservation_status')
        ->where('class', 'Mammalia')
        ->orderBy('name', 'asc')
        ->get();
    }
}
