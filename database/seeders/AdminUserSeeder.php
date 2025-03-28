<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'bkhadka5@tilasmi.com'],
            [
                'name' => 'Baburam Khadka',
                'password' => Hash::make('NaturalAgro567##'),
                'is_admin' => true,
            ]
        );
    }
}
