<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('information_afters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conference_id')->constrained()->onDelete('cascade');
            $table->string('language');
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_afters');
    }
};
