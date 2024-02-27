<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;


class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        // Riempi la tabella
        for ($i = 0; $i < 50; $i++) {
            // Istanzio il model
            $train = new Train();
            // Ne riempio le colonne
            $train->agency = fake()->words(rand(1, 3), true);
            $train->station_start = fake()->words(rand(1, 3), true);
            $train->station_end = fake()->words(rand(1, 3), true);
            $train->time_start = fake()->dateTimeThisYear('+2 months');
            $train->time_end = fake()->dateTimeThisYear('+2 months');
            $train->code = fake()->regexify('[A-Z]{5}[0-4]{3}');
            $train->carriages = fake()->randomNumber(2, true);
            if ($i % 5 == 0){
                $train->in_time = '0';
                $train->cancelled = '0';
            } else{
                $train->in_time = '1';
                $train->cancelled = '1';
            };
            // Lo salvo in persistenza
            $train->save();
        }
    }
}
