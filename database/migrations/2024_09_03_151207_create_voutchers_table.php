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
        Schema::create('voutchers', function (Blueprint $table) {
            $table->id('voutcher_id');
            $table->string('voutcher_name');
            $table->string('voutcher_number1');
            $table->string('voutcher_number2');
            $table->string('address');
            $table->date('voutcher_date');
            $table->string('voucher_phone');
            $table->string('account');
            $table->unsignedBigInteger('voutcher_type');
            $table->timestamps();
    
            $table->foreign('voutcher_type')->references('type_id')->on('voutcher_types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voutchers', function (Blueprint $table) {
            $table->dropForeign(['voutcher_type']);
        });
        Schema::dropIfExists('voutchers');
    }
};
