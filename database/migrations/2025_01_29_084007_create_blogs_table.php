<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->longText('content');
    $table->string('uploaded_by');
    $table->string('image_path')->nullable();
    $table->timestamps();
});

        Schema::create('admin_keys', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('admin_keys');
    }
};