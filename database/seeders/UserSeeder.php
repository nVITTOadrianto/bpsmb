<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::where('name', 'Administrasi')->first();
        $kasubbagRole = Role::where('name', 'Kasubbag TU')->first();
        $kepalaUptdRole = Role::where('name', 'Kepala UPTD BPSMB')->first();
        $sertifikasiRole = Role::where('name', 'Sertifikasi')->first();

        User::create([
            'name' => 'Admin TU',
            'email' => 'admin@bpsmu.id',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
        ]);
        User::create([
            'name' => 'Kasubbag TU',
            'email' => 'kasubbag@bpsmu.id',
            'password' => Hash::make('password'),
            'role_id' => $kasubbagRole->id,
        ]);
        User::create([
            'name' => 'Kepala UPTD',
            'email' => 'kepala.uptd@bpsmu.id',
            'password' => Hash::make('password'),
            'role_id' => $kepalaUptdRole->id,
        ]);
        User::create([
            'name' => 'Sertifikasi',
            'email' => 'sertifikasi@bpsmu.id',
            'password' => Hash::make('password'),
            'role_id' => $sertifikasiRole->id,
        ]);
    }
}
