<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_address', function (Blueprint $table) {
        $table->increments('address_id');
        $table->string('contact_id');
        $table->string('address_barangay');
        $table->string('address_street');
        $table->string('address_city');
        $table->string('address_state');
        $table->string('address_zipcode');
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
