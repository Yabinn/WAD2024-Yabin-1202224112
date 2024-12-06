<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id(); // Primary key: auto-incrementing
            $table->string('lecturer_code', 3)->unique(); // Lecturer code (unique 3 characters)
            $table->string('lecturer_name'); // Lecturer name
            $table->string('nip')->unique(); // Employee ID (unique)
            $table->string('email')->unique(); // Lecturer email (unique)
            $table->string('telephone_number')->nullable(); // Telephone number (optional)
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturers');
    }
}
