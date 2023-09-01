<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create([
            'title' => 'Backend Developer',
            'tags' => 'laravel, php, api',
            'company' => 'Skynet Systems',
            'location' => 'Newark, NJ',
            'email' => 'email4@email.com',
            'website' => 'https://www.skynet.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo
            reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat
            consequatur! Expedita ab consectetur tenetur delensiti?'
        ]);
        Listing::create([
        'title' => 'Junior Developer',
        'tags' => 'laravel, php, javascript',
        'company' => 'Wonka Industries',
        'location' => 'Boston, MA',
        'email' => 'email4@email.com',
        'website' => 'https://www.wonka.com',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit
        quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab
        consectetur tenetur delensiti?'
        ]);
    }
}
