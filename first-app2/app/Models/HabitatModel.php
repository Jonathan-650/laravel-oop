<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HabitatModel extends Model
{
    use HasFactory;

    protected $table = 'habitat';
    protected $primaryKey = 'id';
    protected $incrementing = false;

    protected $fillable = [
        'id','name','location','description','capacity','status','note'
    ];
}
