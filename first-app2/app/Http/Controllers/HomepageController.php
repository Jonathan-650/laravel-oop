<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Promo;
use App\Models\Restaurant;

class HomepageController extends Controller {
    // Set model attribute
    private $menu_model;
    private $promo_model;
    private $restaurant_model;

    public function __construct() {
        // Init model object
        $this->menu_model = new Menu();
        $this->promo_model = new Promo();
        $this->restaurant_model = new Restaurant();
    }

    public function index() {
        // Consume the model method and store into a variable
        $menu = $this->menu_model->getMenu();
        $promo = $this->promo_model->getPromo();
        $name = $this->restaurant_model->getRestaurantName();
        $address = $this->restaurant_model->getRestaurantAddress();

        // Call the view with stored data 
        return view('welcome')
            ->with('menu', $menu)
            ->with('promo', $promo)
            ->with('name', $name)
            ->with('address', $address);
    } 
}