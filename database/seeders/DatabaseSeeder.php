<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User; // ← ini yang penting
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin', // sesuaikan dengan kolom yang kamu pakai
            'password' => Hash::make('admin123'), // jangan lupa hash
            'level' => 'admin', // kalau pakai field level
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Dosen',
            'username' => 'dosen', // username for dosen
            'password' => Hash::make('dosen123'), // hashed password for dosen
            'level' => 'dosen', // level for dosen user
            'remember_token' => Str::random(10),
        ]);
    }
}
