<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 random facilities
        $facilities = Facility::factory()->count(10)->create();

        // Generate 20 random user, each associated with one of the generated facilities
        $facilities->each(function ($facility) {
            User::factory()->count(3) // Number of Users per Facility
                ->create(['facility_id' => $facility->id]);
        });
    }
}

