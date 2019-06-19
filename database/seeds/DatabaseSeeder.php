<?php

use App\Model\Hall;
use App\Model\User;
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
        $admins = factory(App\Model\User::class, 1)->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
            'phone' => '9842089687',
            'role' => 'admin'
        ]);
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
