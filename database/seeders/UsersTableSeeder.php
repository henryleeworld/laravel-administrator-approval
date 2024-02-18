<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function (User $user) {
            $user->update([
                'approved' => true,
            ]);
        });

        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);
    }
}
