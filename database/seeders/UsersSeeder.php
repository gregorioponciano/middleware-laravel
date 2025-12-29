<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@demo.com',
                'password' => Hash::make('22222222'), // Senha padrão
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Usuário Premium',
                'email' => 'premium@demo.com',
                'password' => Hash::make('22222222'), // Senha padrão
                'role' => 'premium',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Usuário Comum',
                'email' => 'user@demo.com',
                'password' => Hash::make('22222222'), // Senha padrão
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Inserir os usuários no banco de dados
        DB::table('users')->insert($users);

        $this->command->info('3 usuários foram criados com sucesso!');
        $this->command->info('Emails: admin@demo.com, premium@demo.com, user@demo.com');
        $this->command->info('Senha padrão: 22222222');
    }
}