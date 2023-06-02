<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = User::factory()->create([
            'name'=> 'John Doe',
            'email' => 'john@gmail.com',
        ]);

        //Undefined proprety $user -> id but works fine
        Listing::factory(10)->create([
            'user_id' => $user['id']
        ]);
        /*\App\Models\Listing::create(
            [
            'title' => 'Laravel Senior Developer',
            'tags' => 'devolopment, laravel, PHP',
            'company' => 'Laravel.co',
            'location' => 'Boston',
            'email' => 'laravel@laravel.com',
            'website' => 'laravel.com',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.'
            ]);

        \App\Models\Listing::create(
            [
        'title' => 'Javascript junior Developer',
            'tags' => 'devolopment, javascript',
            'company' => 'javascript.co',
            'location' => 'Chicago',
            'email' => 'javascript@javascript.com',
            'website' => 'https://www.javascript.com/',
            'description' => 'JavaScript.com is a resource built by the Pluralsight team for the JavaScript community.

            Because JavaScript is a great language for coding beginners, we\'ve gathered some of the best learning resources around and built a JavaScript course to help new developers get up and running.
            
            With the help of community members contributing content to the site, JavaScript.com aims to also keep more advanced developers up to date on news, frameworks, and libraries.'
        ]);*/
    }
}
