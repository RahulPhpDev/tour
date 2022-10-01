<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = [
            'name' => 'Saksham',
            'email' => 'beersinghpanwar@gmail.com',
            'password' => "Saksham@8791#"
        ];
        User::query()->updateOrCreate(['email' => 'beersinghpanwar@gmail.com'],$admin);
    }
}
