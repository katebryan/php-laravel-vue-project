<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Bookable;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Bookable::all()->each(function (Bookable $bookable) {
            $reviews = \App\Models\Review::factory(random_int(5, 30))->make();
            $bookable->reviews()->saveMany($reviews);
        });
    }
}