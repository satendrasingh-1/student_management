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
         Schema::create('payments', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('enrollment_id');
             $table->date('join_date')->default(DB::raw('CURRENT_DATE'));  // Set default to current date
             $table->double('amount');
             $table->timestamps();
             $table->date('paid_date');
         });
     }


     //given
    // public function up(): void
    // {
    //     Schema::create('payments', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('enrollment_id');
    //         $table->date('join_date');
    //         $table->double('amount');
    //         $table->timestamps();
    //         $table->date('paid_date');
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
