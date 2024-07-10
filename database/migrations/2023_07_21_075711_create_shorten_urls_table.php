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
        Schema::create('shorten_urls', function (Blueprint $table) {
            $table->id();
            $table->text('original_url');
            $table->text('shortened_url');
            $table->text('status');
            $table->string('ip_address', 255);
            $table->string('browser', 255);
            $table->string('os', 255);
            $table->string('device', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shorten_urls');
    }
};
