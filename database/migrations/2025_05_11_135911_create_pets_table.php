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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('pet_name');
            $table->string('pet_img');
            $table->string('pet_type');
            $table->string('pet_breed');
            $table->foreignId('owner_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->date('date_lost')->nullable();
            $table->string('last_view_locale')->nullable();
            $table->text('depoiment')->nullable();
            $table->foreignId('finder_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->date('date_found')->nullable();
            $table->string('found_locale')->nullable();
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
