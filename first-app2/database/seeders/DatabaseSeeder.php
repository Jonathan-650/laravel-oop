<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ClassCleaningDuty;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ClassCleaningDuty::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        ClassCleaningDuty::factory(5)->create();
    }
}
