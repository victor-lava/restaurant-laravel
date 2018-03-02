<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $table = 'categories'; // SQL table name
    public function products() {
        /* SELECT COUNT(*) FROM products WHERE category = 5 */
        return Product::where('category', $this->id)->count();
    }
}
