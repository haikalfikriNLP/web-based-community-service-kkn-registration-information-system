<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        $adminUser = User::create([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Create mahasiswa user
        $mahasiswaUser = User::create([
            'username' => 'mahasiswa',
            'password' => bcrypt('mahasiswa123'),
            'role' => 'mahasiswa',
        ]);

        // Create dpl user
        $dplUser = User::create([
            'username' => 'dpl',
            'password' => bcrypt('dpl123'),
            'role' => 'dpl',
        ]);

        // Create new admin user with password tes123
        $adminUser2 = User::create([
            'username' => 'admin2',
            'password' => bcrypt('tes123'),
            'role' => 'admin',
        ]);

        // Create related admin record for new admin
        \App\Models\Admin::create([
            'user_id' => $adminUser->id,
            'nama_lengkap' => 'Admin User',
            'foto' => 'storage/images/profiles/profile.jpeg',
        ]);

        // Create related admin record for new admin2
        \App\Models\Admin::create([
            'user_id' => $adminUser2->id,
            'nama_lengkap' => 'Admin User 2',
            'foto' => 'storage/images/profiles/profile.jpeg',
        ]);

        // Create related mahasiswa record
        \App\Models\Mahasiswa::create([
            'user_id' => $mahasiswaUser->id,
            'nama_lengkap' => 'Mahasiswa User',
            'foto' => 'storage/images/profiles/profile.jpeg',
            'status' => 'belum terdaftar',
        ]);

        // Create related dpl record
        \App\Models\DPL::create([
            'user_id' => $dplUser->id,
            'nama_lengkap' => 'DPL User',
            'foto' => 'storage/images/profiles/profile.jpeg',
            'status' => 'belum terdaftar',
        ]);
    }
}
