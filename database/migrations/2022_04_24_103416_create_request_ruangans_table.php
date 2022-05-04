<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_ruangans', function (Blueprint $table) {
            $table->id();
            $table->string('room');
            $table->unsignedBigInteger('user_id');
            $table->date('date_of_use');
            $table->date('time_end');
            $table->enum('status', [1, 2, 3])->default(1);
            $table->longText('description');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_ruangans');
    }
};
