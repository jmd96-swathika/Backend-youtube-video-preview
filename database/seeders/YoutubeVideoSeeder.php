<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\YoutubeVideo;
use Illuminate\Support\Facades\File;

class YoutubeVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = File::get(database_path('data/db.json'));
        $data = json_decode($json_data, true);

        if (is_array($data['videos'])) {
            foreach ($data['videos'] as $video) {
                YoutubeVideo::create($video);
            }
        }
    }
}
