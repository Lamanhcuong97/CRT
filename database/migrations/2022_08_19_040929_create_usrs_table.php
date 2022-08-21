<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usrs', function (Blueprint $table) {
            $table->increments('idusr');
            $table->string('username');
            $table->string('password');
            $table->string('usr_name');
            $table->string('usr_surname');
            $table->string('usr_email');
            $table->string('usr_tel');
            $table->string('usr_assigned');
            $table->string('usr_last_login');
            $table->string('role_idrole');
            $table->string('reporter_idreporter');
            $table->rememberToken();
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
        Schema::dropIfExists('usrs');
    }
}
