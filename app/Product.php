<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Savybės pridėjimas prie modelio
    // kurį galima pasiimti vaizde, arba kontroleryje
    // public $store = 'ebay';

    // metodas turi būti lentelės pavadinimo
    public function categories() {
        // Sukuria sąsają su Category modeliu
        return $this->hasOne('App\Category', 'id', 'category');
    }

    public function manufacturers() {
        return $this->hasOne('App\Manufacturer', 'id', 'manufacturer');
    }

}
