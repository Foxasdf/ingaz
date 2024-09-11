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
        Schema::create('passports', function (Blueprint $table) {
                $table->id('passport_id');
                $table->string('first_name_a');
                $table->string('father_name_a');
                $table->string('g_father_name_a');
                $table->string('last_name_a');
                $table->string('first_name_e');
                $table->string('father_name_e');
                $table->string('g_father_name_e');
                $table->string('last_name_e');
                $table->string('mother_name');
                $table->date('birth_date');
                $table->string('birth_place');
                $table->string('nationalty');
                $table->date('issue_date');
                $table->date('issue_end');
                $table->string('issue_place');
                $table->string('passport_number');
                $table->string('photo');
                $table->string('sex');
                $table->string('national_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passports');
    }
};
