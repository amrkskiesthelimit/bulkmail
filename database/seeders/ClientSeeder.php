<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Dumandan',
                'first_name' => 'Norma',
                'middle_name' => 'Majomot',
                'phone_number' => '091234567',
                'address' => 'Mandaug Calape Bohol.',
                'birth_date' => '1973-11-09',
                'email' => 'norma@gmail.com',
                'initial_deposit' => 1000,
            ],

            [
                'last_name' => 'Dumandan',
                'first_name' => 'John Mark.',
                'middle_name' => 'Majomot',
                'phone_number' => '09759108302',
                'address' => 'Mandaug Calape Bohol.',
                'birth_date' => '1999-11-17',
                'email' => 'johnmark23@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Calotes',
                'first_name' => 'Clarice Marie',
                'middle_name' => 'Aguanta',
                'phone_number' => '091345673432',
                'address' => 'Calunasan Calape Bohol.',
                'birth_date' => '2003-02-03',
                'email' => 'calotesclang@gmail.com',
                'initial_deposit' => 2000,
            ],
            [
                'last_name' => 'Lascona ',
                'first_name' => 'Rodel',
                'middle_name' => '',
                'phone_number' => '0945678234',
                'address' => 'Centro Loon Bohol.',
                'birth_date' => '2001-07-09',
                'email' => 'Lascona@gmail.com',
                'initial_deposit' => 111000,
            ],
            [
                'last_name' => 'Dumandan ',
                'first_name' => 'Jonathan',
                'middle_name' => 'Dayon',
                'phone_number' => '09567821431',
                'address' => 'Baguio Dist. Davao City',
                'birth_date' => '1970-07-15',
                'email' => 'Jonathandumandan@gmail.com',
                'initial_deposit' => 12000,
            ],
            [
                'last_name' => 'Lascona ',
                'first_name' => 'Jonnah',
                'middle_name' => 'Dumandan',
                'phone_number' => '0996721341',
                'address' => 'Mandaug Calape Bohol.',
                'birth_date' => '1996-08-15',
                'email' => 'jonnahlascona@gmail.com',
                'initial_deposit' => 20000,
            ],



        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
