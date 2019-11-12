<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            $post = new App\Post();
            $post->title = $faker->text(10);
            $post->content = $faker->text(2000);
            $post->user_id = 1;
            $post->save();
        }

        /* for ($i = 0; $i < 50; $i++) {
            $post = new App\Post();
            $post->title = str_random(10);
            $post->content = str_random(200);
            $post->user_id = 1;
            $post->save();
        } */
    }
}
