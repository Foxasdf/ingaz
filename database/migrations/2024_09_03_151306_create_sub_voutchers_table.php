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
        Schema::create('sub_voutchers', function (Blueprint $table) {
            $table->id('sub_voutcher_id');
            $table->unsignedBigInteger('vouchter');
            $table->string('passport');
            $table->string('suplyer');
            $table->decimal('cost', 10, 2);
            $table->unsignedBigInteger('cost_coin');
            $table->string('custumer');
            $table->decimal('sell', 10, 2);
            $table->unsignedBigInteger('sell_coin');
            $table->date('recive_date');
            $table->date('send_date');
            $table->date('finish_date');
            $table->string('status');
            $table->string('operatin_type');
            $table->timestamps();
    
            $table->foreign('passport')->references('passport_number')->on('passports')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('vouchter')->references('voutcher_id')->on('voutchers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cost_coin')->references('coin_id')->on('coins')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sell_coin')->references('coin_id')->on('coins')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_voutchers');
    }
};
