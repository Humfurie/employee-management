<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('employee_position', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
    //         $table->foreignId('position_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
    //         $table->integer('flag')->default(1);
    //         $table->timestamps();
    //         $table->softDeletes();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('employee_position');
    // }
};
