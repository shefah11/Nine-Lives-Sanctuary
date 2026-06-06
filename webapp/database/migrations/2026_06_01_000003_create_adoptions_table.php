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
            
            // Foreign Keys linking User and Cat cleanly
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            // FIX: Pointing to 'id' to match Member 3's exact table structure
            $table->foreignId('cat_id')->constrained('cats', 'id')->onDelete('cascade');
            
            // Form Data Fields
            $table->string('full_name');
            $table->string('contact_number');
            
            // Status tracker
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