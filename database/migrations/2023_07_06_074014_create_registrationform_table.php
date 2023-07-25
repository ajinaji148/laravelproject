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
        Schema::create('registrationform', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender',['male','female']);
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->biginteger('phonenumber');
            $table->string('country');
            
            $table->string('state');
            $table->string('city');
            $table->string('avatar');

            $table->set('hobbies',['vollyball','cricket','football','music','reading','writing']);
            
            $table->unsignedbigInteger('userid')->nullable();

            $table->foreign('userid')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrationform');
    }
};
