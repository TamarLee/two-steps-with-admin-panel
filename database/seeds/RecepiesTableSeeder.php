<?php

use Illuminate\Database\Seeder;

class RecepiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $recepies = [
    		[
    			'title' => '20 წუთში მოსამზადებელი დილის საუზმე',
    			'ingredients' => '<ul>
    								<li>1/2 დაჭრილი ქათამი</li>
									<li>4 ნაჭერი ბეკონი</li>
									</ul>',
    			'description' => 'მაკარონი მოვხარშოთ.ბეკონი შევწვათ. ტაფაზე გავადნოთ კარაქი და 
    								მოვათავსოთ ქათმის ხორცი, შევწვათ კარგად. ოხრახუში, მარილი, პილპილი, პარმეზანი და კარგად ავურიოთ.',
    			'image' => 'layer1.png',
    			'link' => '/post',
    			'tag' => 'ქართული',
    			'author' => 'გიორგი გულაშვილი',
    			
    		],

    		
    	];
    	for($i=1; $i<=10; $i++) {
	    	foreach ($recepies as  $recepie) {
	    	
		        DB::table('recepies')->insert([
		            'title' => $recepie["title"],
		            'ingredients' => $recepie["ingredients"],
		            'description' => $recepie["description"],
		            'image' => $recepie["image"],
		            'link' => $recepie["link"],
		            'tag' => $recepie["tag"],
		            'author' => $recepie["author"],
		        ]);

	        }
    	}
    }
}
