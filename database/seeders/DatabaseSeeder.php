<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run all seeders.
     * Command: php artisan db:seed
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
