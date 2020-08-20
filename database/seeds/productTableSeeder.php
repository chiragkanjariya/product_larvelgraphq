<?php
use App\Product;
use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Product::create([
         	'id' => '1',
            'product_name' => 'Product 1',
            'product_image' => 'image_1.jpg',
            'quantity' => '1',
            'category' => 'category 1',
            'sub_category' => 'sub-category 1'
        ]);
    }
}
