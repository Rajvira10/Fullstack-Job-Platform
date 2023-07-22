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
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(10)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel,php,backend,fullstack',
        //     'company' => 'Acme Corp',
        //     'location' => 'Remote',
        //     'email' => 'email@email.com',
        //     'website' => 'https://example.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sequi consequatur est. Sapiente eaque repudiandae commodi quisquam voluptates non, nisi corporis, omnis fugit odio similique delectus dolores impedit, ipsa a molestiae doloremque magnam cupiditate ut eum tempora! Nisi totam in iusto odio, aliquid voluptate cupiditate quod iste facilis est enim!'
        // ]);

        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'laravel,php,backend,fullstack',
        //     'company' => 'Acme Corp',
        //     'location' => 'Remote',
        //     'email' => 'email@email.com',
        //     'website' => 'https://example.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sequi consequatur est. Sapiente eaque repudiandae commodi quisquam voluptates non, nisi corporis, omnis fugit odio similique delectus dolores impedit, ipsa a molestiae doloremque magnam cupiditate ut eum tempora! Nisi totam in iusto odio, aliquid voluptate cupiditate quod iste facilis est enim!'
        // ]);

        // Listing::factory(10)->create();
        
    }
}
