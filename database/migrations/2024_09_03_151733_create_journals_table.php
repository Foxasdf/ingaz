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
        Schema::create('journals', function (Blueprint $table) {
            $table->id('journal_id');
            $table->unsignedBigInteger('acount_dept');
            $table->unsignedBigInteger('acount_cridit');
            $table->decimal('cridit', 10, 2);
            $table->decimal('dept', 10, 2);
            $table->unsignedBigInteger('coin');
            $table->decimal('coin_price', 10, 2);
            $table->date('operation_date');
            $table->text('memo');
            $table->unsignedBigInteger('voutcher_id');
            $table->unsignedBigInteger('passport_id');
            $table->timestamps();
    
        // Foreign key constraints
        $table->foreign('acount_dept')->references('account_id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('acount_cridit')->references('account_id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('coin')->references('coin_id')->on('coins')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('voutcher_id')->references('voutcher_id')->on('voutchers')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('passport_id')->references('passport_id')->on('passports')->onUpdate('cascade')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropForeign(['voutcher_id']);
            $table->dropForeign(['acount_dept']);
            $table->dropForeign(['acount_cridit']);
            $table->dropForeign(['coin']);
            $table->dropForeign(['passport_id']);
        });
        
        Schema::dropIfExists('journals');
    }
};
