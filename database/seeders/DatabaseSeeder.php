<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Lookup;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Category::factory(10)->create();
        $this->call(LookupsTableSeeder::class);

        $brandsLookup = Lookup::where('key', 'brands')->first();
        $brandsData = json_decode($brandsLookup->data, true);
        $adidasBrandKey = collect($brandsData)->firstWhere('name', 'adidas')['key'] ?? null;

        $categoriesLookup = Lookup::where('key', 'categories')->first();
        $categoriesData = json_decode($categoriesLookup->data, true);
        $clothingCategoryKey = collect($categoriesData)->firstWhere('name', 'clothing')['key'] ?? null;

        Product::factory(2)
            ->hasVariants(4, function (array $attributes, Product $product) use ($adidasBrandKey, $clothingCategoryKey) {
                return [
                    'brand_id' => $adidasBrandKey,
                    'category_id' => $clothingCategoryKey
                ];
            })
            ->create();
    }
}
