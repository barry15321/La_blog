<?php
use App\Models\Post;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();
    	$faker = \Faker\Factory::create();

       foreach(range(1,10) as $number){
       		Post::create([
        	'title' => $faker->sentence ,
        	'content' => $faker->sentence,
        	'is_feature' => rand(0,1),
        	'page_view' => rand(1,500),
        	'created_at' => Carbon::now()->subDays(10-$number),
        	'updated_at' => Carbon::now()->subDays(10-$number),
        	]);
       }
    }
}
