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
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->string('course');
            $table->string('designation');
            $table->string('experience');
            $table->string('gender');
            $table->string('martial_status');
            $table->string('country');
            $table->string('state');
            $table->string('city');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
