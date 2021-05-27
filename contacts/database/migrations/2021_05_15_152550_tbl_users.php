<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('tbl_users', function (Blueprint $table) {
        $table->increments('user_id');
        $table->string('name');
        $table->string('username');
        $table->string('email');
        $table->string('password');
        $table->string('raw_password');
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
        //
    }
}
