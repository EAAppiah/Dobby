<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\UserLog;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 random facilities
        $facilities = Facility::factory()->count(10)->create();

        // Generate 20 random user logs, each associated with one of the generated facilities
        $facilities->each(function ($facility) {
            UserLog::factory()->count(3) // Number of UserLogs per Facility
                ->create(['facility_id' => $facility->id]);
        });
    }
}

