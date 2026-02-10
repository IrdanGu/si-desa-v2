<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
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
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'level' => 'admin', // Menggunakan field level sesuai model User
            // Tambahkan kolom lain yang diperlukan sesuai dengan model User Anda
        ]);

        $this->command->info('User admin berhasil dibuat!');
    }
}
