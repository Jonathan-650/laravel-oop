<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model {
    public static function getPromo(): array {
        return ["Buy a burger at the price of two burgers and get one burger 100% FREE!", "20% on (not off) on Uranium (yes we're increasing it by 20%)"];
    }
}