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
            'name' => 'Rahul',
            'email' => 'admin@admin.com',
            'password' => 123456
        ];
        User::query()->create($admin);
    }
}
