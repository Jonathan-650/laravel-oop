<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id', 'description', 'date_start', 'date_end', 'created_at', 'updated_at', 
        'type'
    ];

    public static function getAll()
    {
        return self::all();
    }

    public static function createEvent($data)
    {
        return self::create($data);
    }
    public static function deleteByID($id)
    {
        $data = self::find($id);
        if (!$data) return false;
        return $data->delete();
    }
    public static function updateByID($id, $newdata)
    {
        $data = self::find($id);
        if (!$data) return false;
        $data->update($newdata);
        return $data->fresh();
    }
}
