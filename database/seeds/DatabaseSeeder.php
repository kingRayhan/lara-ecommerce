<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 15)->create()->each(function ($cat) {
            factory(App\Product::class, rand(5, 20))->create(['category_id' => $cat->id]);
        });
    }
}
