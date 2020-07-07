<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products_details = config('products');

      foreach ($products_details as $product_details) {
        $nuovo_prodotto = new Product();
        $nuovo_prodotto->name = $product_details['name'];
        $nuovo_prodotto->type = $product_details['type'];
        $nuovo_prodotto->color = $product_details['color'];
        $nuovo_prodotto->amount = $product_details['price'];
        $nuovo_prodotto->save();
      }
    }
}
