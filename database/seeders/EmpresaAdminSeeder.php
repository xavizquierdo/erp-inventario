<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmpresaAdminSeeder extends Seeder
{
    public function run(): void
    {
        $empresa = Empresa::first();

        if (!$empresa) {
            return;
        }

        User::firstOrCreate(
            ['email' => 'admin@xip.ec'],
            [
                'name' => 'Administrador XIP',
                'password' => Hash::make('admin123'),
                'empresa_id' => $empresa->id,
            ]
        );
    }
}
