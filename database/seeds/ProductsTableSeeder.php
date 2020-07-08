<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      // $products_details = config('products');
      //
      // foreach ($products_details as $product_details) {
      //   $nuovo_prodotto = new Product();
      //   $nuovo_prodotto->name = $product_details['name'];
      //   $nuovo_prodotto->type = $product_details['type'];
      //   $nuovo_prodotto->color = $product_details['color'];
      //   $nuovo_prodotto->price = $product_details['price'];
      //   $nuovo_prodotto->save();
      // }

      for ($i=0; $i < 10; $i++) {
        $nuovo_prodotto = new Product();
          $nuovo_prodotto->name = $faker->sentence(3);
          $nuovo_prodotto->type = $faker->text(70);
          $nuovo_prodotto->color = $faker->colorName('Blue', 'Black', 'Red');
          $nuovo_prodotto->price = $faker->randomFloat(3, 50, 356);
          $nuovo_prodotto->save();
      }
    }
}
