<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        Usuário: johndoe
Senha: Event2023!
E-mail: johndoe@example.com

Usuário: sarahsmith
Senha: Conference1
E-mail: sarahsmith@example.com

Usuário: alexwilson
Senha: Summer2023
E-mail: alexwilson@example.com

Usuário: emilyjones
Senha: Tickets2023
E-mail: emilyjones@example.com

Usuário: mikedavis
Senha: AdminPass!
E-mail: mikedavis@example.com

Usuário: lisawhite
Senha: EventPlanner
E-mail: lisawhite@example.com

Usuário: ryanscott
Senha: Attendee2023
E-mail: ryanscott@example.com

Usuário: laurawalker
Senha: TicketSales
E-mail: laurawalker@example.com

Usuário: chrisharris
Senha: Manager2023
E-mail: chrisharris@example.com

Usuário: juliebrown
Senha: Conference3
E-mail: juliebrown@example.com
*/
        $faker = \Faker\Factory::create('pt_PT');
        $users = [
            [
                'name' => 'johndoe',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 3,
                'email' => 'johndoe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'sarahsmith',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 3,
                'email' => 'sarahsmith@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
            ],

            // prencha a lista de acordo a lista acima comentada
            // dica: processar de uma so vez
            [
                'name' => 'alexwilson',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 1,
                'email' => 'alexwilson@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'emilyjones',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
                'email' => 'emilyjones@example.com',
            ],
            [
                'name' => 'mikedavis',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 2,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
                'email' => 'mikedavis@example.com',
            ],
            [
                'name' => 'lisawhite',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 2,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
                'email' => 'lisawhite@example.com',
            ],
            [
                'name' => 'ryanscott',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 2,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
                'email' => 'ryanscott@example.com',
            ],
            [
                'name' => 'laurawalker',
                'bi' => $faker->randomNumber(9) . $faker->randomNumber(5),
                'type_id' => 2,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // A senha pode ser personalizada de acordo com suas necessidades
                'remember_token' => Str::random(10),
                'email' => 'laurawalker@example.com',
            ],

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
