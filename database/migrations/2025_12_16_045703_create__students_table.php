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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("full_name", 50);
            $table->date("dob");
            $table->string("gender", 10);
            $table->string("phone", 15);
            $table->string("city", 20);
            $table->string("course", 10);
            $table->integer("joining_year");
            $table->integer("roll_no");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
