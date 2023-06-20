<?php

namespace Database\Seeders;

use App\Models\Usertype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usertype::insert([
            'descricao' => 'admin',
        ]);
        Usertype::insert([
            'descricao' => 'cliente',
        ]);
        Usertype::insert([
            'descricao' => 'convidado',
        ]);
    }
}
