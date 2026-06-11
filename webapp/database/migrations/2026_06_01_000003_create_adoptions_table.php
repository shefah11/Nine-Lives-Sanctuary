<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id('AdoptionID'); // Your Primary Key
            
            // Foreign key pointing to default users table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            // Temporary nullable field since your friend's cat table isn't here yet
            $table->unsignedBigInteger('cat_id')->nullable();
            
            // Your Form Fields
            $table->string('full_name');
            $table->string('contact_number');
            
            // Status Tracking
            $table->string('status')->default('pending');
            $table->date('date')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
