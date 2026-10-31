<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassCleaningDuty extends Model
{
    use HasFactory;

    protected $table = 'class_cleaning_duty';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id', 'student_id', 'day_name'
    ];

    public static function getAll()
    {
        return self::all();
    }

    public static function createClassCleaningDuty($data)
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


