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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');
            $table->text('account_name');
            $table->boolean('trading');
            $table->boolean('visa_company');
            $table->boolean('hotel_company');
            $table->boolean('airline_company');
            $table->boolean('transport_company');
            $table->boolean('ship_company');
            $table->boolean('insurance_company');
            $table->boolean('customer');
            $table->boolean('employee');
            $table->boolean('box');
            $table->boolean('woner');
            $table->integer('persantage');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('accounts');
    }
};
