<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Page::create([
            'name_en' => 'home',
            'slug' => 'home',
            
        ]);
        Page::create([
            'name_en' => 'faqs',
            'slug' => 'faqs',
            
        ]);
        Page::create([
            'name_en' => 'videos',
            'slug' => 'videos',
            
        ]);
        Page::create([
            'name_en' => 'contact',
            'slug' => 'contact',
            
        ]);
        Page::create([
            'name_en' => 'about',
            'slug' => 'about',
            
        ]);
        Page::create([
            'name_en' => 'our social projects',
            'slug' => 'our-social-projects',
            
        ]);
        Page::create([
            'name_en' => 'Prepare your travel to morocco',
            'slug' => 'Prepare-your-travel-to-morocco',
            
        ]);
        Page::create([
            'name_en' => 'General advices',
            'slug' => 'General-advices',
            
        ]);
    }
}
