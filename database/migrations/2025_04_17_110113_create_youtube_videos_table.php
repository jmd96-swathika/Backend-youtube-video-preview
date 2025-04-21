<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('youtube_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnailUrl');
            $table->integer('duration');
            $table->timestamp('uploadTime');
            $table->integer('views')->default(0);
            $table->string('author');
            $table->string('videoUrl');
            $table->text('description');
            $table->text('subscriber');
            $table->boolean('isLive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youtube_videos');
    }
};
