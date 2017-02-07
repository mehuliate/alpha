<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address');
            $table->string('host_name');
            $table->string('mac_address');
            $table->string('operating_system');
            $table->string('user_agent');
            $table->string('lokasi');
            $table->string('bidang');
            $table->string('seksi');
            $table->string('tugas_pengguna');
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
        Schema::dropIfExists('data_computers');
    }
}
