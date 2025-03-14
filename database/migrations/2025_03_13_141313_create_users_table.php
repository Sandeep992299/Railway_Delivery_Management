<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('role');
        $table->string('cus_nic')->nullable();
        $table->string('cus_tp')->nullable();
        $table->string('em_id')->nullable();
        $table->string('em_nic')->nullable();
        $table->string('em_tp')->nullable();
        $table->string('position')->nullable();
        $table->string('station_name')->nullable();
        $table->date('dob')->nullable();
        $table->integer('age')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
