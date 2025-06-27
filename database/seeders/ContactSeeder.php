<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_PT');

        for ($i = 0; $i < 50; $i++) {
            Contact::create([
                'name' => $faker->name(),
                'contact' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
            ]);
        }
    }
}
