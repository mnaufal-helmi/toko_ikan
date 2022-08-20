<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'username' => $faker->username,
                'password' => $faker->password,
                'salt' => $faker->password,
                'avatar' => NULL,
                'role' => 1,
                'created_by' => 0,
                'created_date' => date("Y-m-d H:i:s"),
            ];

            echo ('Inser user' . ($i + 1));

            $this->db->table('user')->insert($data);
        }

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder

    }
}
