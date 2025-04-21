## About

This Laravel backend is for YouTube-like video preview application. It serves video metadata through API endpoints, stores data in an SQLite database, and includes models, migrations, and seeding tools to manage the content.

## Requirements

1. PHP 8.4
2. Composer
3. Node.js & npm
4. Git

## Features

1. API to fetch and search videos
2. Seeders load sample video data

## Setup Instructions

1. Install Laravel
    >
         composer create-project laravel/laravel youtube_video_preview
         cd youtube_video_preview

2. Run Laravel Server
    >
        php artisan serve

3. Configure Database
    > Create the SQLite file:

        type nul > database/database.sqlite

    > In .env:

        DB_CONNECTION=sqlite
        DB_DATABASE=database/database.sqlite

4. Create Model, Migration, Controller
    >
        php artisan make:model YoutubeVideo -mc

5. Run Migrations
    >
        php artisan migrate

6. Seed Database
    >
        php artisan make:seeder YoutubeVideoSeeder
    
        php artisan db:seed

7. Setup CORS (if config not available)
    If needed, manually create config/cors.php and add allowed origins

    > Clear config cache:
    
       php artisan config:clear

## How to Run

1. Clone and installation
    >
        git clone https://github.com/jmd96-swathika/Backend-youtube-video-preview.git
        cd youtube_video_preview
        composer install
        npm install
        cp .env.example .env
            DB_DATABASE=database/database.sqlite

2. Configure database
    >
        type nul > database/database.sqlite
        php artisan migrate
        php artisan db:seed

3. Start backend
    >
        php artisan serve

This runs at http://localhost:8000
