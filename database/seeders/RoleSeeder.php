<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create(['name' => 'Administrasi', 'description' => 'Menginput data surat masuk dan mencetak dokumen']);
        Role::create(['name' => 'Kasubbag TU', 'description' => 'Persetujuan tahap 1']);
        Role::create(['name' => 'Kepala UPTD BPSMB', 'description' => 'Persetujuan tahap 2']);
        Role::create(['name' => 'Sertifikasi', 'description' => 'Persetujuan tahap 3']);
    }
}
