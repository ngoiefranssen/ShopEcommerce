<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
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
        $habillement = Category::factory()->create(['name' => 'Habillement']);

         Product::factory()
              ->sequence(fn ($sequence) => ['image_url' => $sequence->index + 1 . '.jpg'])
              ->for($habillement)
              ->count(10)
              ->create();

              $technologie = Category::factory()->create(['name' => 'Technologie']);

              Product::factory()
                   ->sequence(fn ($sequence) => ['image_url' => $sequence->index + 11 . '.jpg'])
                   ->for($technologie)
                   ->count(10)
                   ->create();



    }
}
