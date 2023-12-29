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
            // $table->id();
            $table->char('idstudent', 7);
            $table->string('fullname',100);
            // $table->enum('gender',['M','F']);
            // $table->string('address',100);
            // $table->string('emailaddress',100);
            // $table->char('phone',20);
            // $table->primary('idstudent');
            // $table->timestamps();
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
