<?php

namespace Database\Seeders;

use App\Models\Language;

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // looks like method "create" is not found. But it works
        // like here:
        // https://laracasts.com/series/livewire-3-from-scratch/episodes/5 [01:40]
        Language::create(['label' => 'ua']);
        Language::create(['label' => 'ru']);
    }
}
