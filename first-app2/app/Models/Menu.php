<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    public static function getMenu(): array {
        return  [
            (object)["food" => "Ayam Geprek", "price" => 15],
            (object)["food" => "Fried Rice", "price" => 18],
            (object)["food" => "Matcha", "price" => 10],
            (object)["food" => "Burger (looks like one? no warranty)", "price" => 20],
            (object)["food" => "Uranium-235", "price" => 10000],
            (object)["food" => "para-Dimethylaminobenzaldehyde (P-DMAB)", "price" => 20000],
            (object)["food" => "Hydrazine", "price" => 50000]
        ];
    }
}