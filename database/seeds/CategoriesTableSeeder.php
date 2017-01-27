<?php

use Illuminate\Database\Seeder;
use PublicaSalta\Category;
use PublicaSalta\SubCategory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //SubCategory::truncate();
        Category::truncate();

        factory(PublicaSalta\Category::class, 10)->create()->each(function ($category) {
            //$cat = factory(PublicaSalta\Category::class)->make();

            $subcate = factory(SubCategory::class)->make();
            $category->category()->save($subcate);

        });

        //factory(Category::class,10)->create();
    }
}
