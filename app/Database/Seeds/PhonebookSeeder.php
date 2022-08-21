<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PhonebookSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for ($i = 1; $i <= 500; $i++) {
            $data[$i] = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->e164PhoneNumber(),
            ];
        }
        $this->db->table('phonebook')->insertBatch($data);
    }
}
