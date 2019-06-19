<?php

use App\Model\Hall;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $address = factory(App\Models\Hall::class, 5)->create();
        Hall::create([
        	'name' => 'Hall A',
        	'address' => 'naya baneswor',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall B',
        	'address' => 'old baneswor',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall C',
        	'address' => 'koteswor',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall D',
        	'address' => 'putalisadak',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall E',
        	'address' => 'maharajgunj',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall F',
        	'address' => 'bhaktapur',
        	'phone' => '9842089687'
        ]);
        Hall::create([
        	'name' => 'Hall G',
        	'address' => 'lalitpur',
        	'phone' => '9842089687'
        ]);
    }
}
