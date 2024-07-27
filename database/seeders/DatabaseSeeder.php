<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     \App\Models\User::factory(1)->create();

    //     \App\Models\User::factory()->create([
    //         'name' => 'Safaa Magdy',
    //         'email' => 'safaaAdmin@CSEAdmin',
    //         'year_id' => 10,
    //         'password'=> bcrypt('30001151207066'),
    //         'admin'=> 1,
    //         'national_id'=> '30001151207066',
    //         'image'=> 'data:image/png;base64,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',

    //     ]);
    // }
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // Add other seeders here if needed
        ]);
    }
}
