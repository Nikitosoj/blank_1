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
        Schema::create('fakes', function (Blueprint $fakes) {
            $fakes->id()->unique();
            $fakes->integer('user_id');
            $fakes->string('email')->unique();
            $fakes->string('name')->nullable();
            $fakes->integer('password');
            $fakes->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
