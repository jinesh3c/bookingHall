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
        $this->call(HallsTableSeeder::class);
    }
}
