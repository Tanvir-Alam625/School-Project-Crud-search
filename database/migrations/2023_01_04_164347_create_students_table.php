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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('roll')->unique()->nullable();
            $table->integer('reg')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('fatherName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('image')->nullable();
            $table->string('technology')->nullable();
            $table->string('gender')->nullable();
            $table->string('session')->nullable();
            $table->string('semester')->nullable();
            $table->string('group')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('students');
    }
};
