<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tags = [
    		[
    			'title' => 'სუში',
    			'image' => 'img/icon1.png',
    			'link' => '#',
    		],

    		[
    			'title' => 'კოქტეილი',
    			'image' => 'img/icon2.png',
    			'link' => '#',
    		],

    		[
    			'title' => 'ქართული',
    			'image' => 'img/icon3.png',
    			'link' => '#',
    		],
    	];
    	foreach ($tags as  $tag) {
    	
	        DB::table('tags')->insert([
	            'title' => $tag["title"],
	            'image' => $tag["image"],
	            'link' => $tag["link"],
	        ]);

        }
    }
}
