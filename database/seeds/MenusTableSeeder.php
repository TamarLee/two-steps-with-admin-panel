<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
    		[
    			'title' => 'კომპანიის შესახებ',
    			'link' => '#',
    		],

    		[
    			'title' => 'მაღაზიები',
    			'link' => '#',
    		],

    		[
    			'title' => 'ფასდაკლებები',
    			'link' => '#',
    		],
    		[
    			'title' => 'მედია',
    			'link' => '#',
    		],
    		[
    			'title' => 'კულინარია',
    			'link' => '#',
    		],
    		[
    			'title' => 'კონტაქტი',
    			'link' => '#',
    		],
    	];
    	foreach ($menus as  $menu) {
    	
	        DB::table('menus')->insert([
	            'title' => $menu["title"],
	            'link' => $menu["link"],
	        ]);

        }
    }
}
