<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model {
    public static function getRestaurantName(): string {
        // define restaurant name
        return "Average restaurant (our food is average)";
    }

    public static function getRestaurantAddress(): object {
        // define address object
        return (object)[
            "street" => "Jl. Melati 24",
            "city" => "South Jakarta"
        ];
    }
}