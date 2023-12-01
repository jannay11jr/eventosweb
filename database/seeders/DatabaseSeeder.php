<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsuariosSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(EventosSeeder::class);
        $this->call(ArtistasSeeder::class);
        $this->call(ComprasSeeder::class);
        $this->call(EntradasSeeder::class);
        $this->call(GenerosSeeder::class);
        $this->call(PivotSeeder::class);


    }
}
