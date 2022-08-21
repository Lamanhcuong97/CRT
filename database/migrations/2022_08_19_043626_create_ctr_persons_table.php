<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctr_persons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idreporter');
            $table->string('name');
            $table->string('surname');
            $table->string('nationality');
            $table->date('birthday');
            $table->string('occupation');
            $table->string('phone_number');
            $table->string('identity_card');
            $table->string('nominee');
            $table->string('owner');
            $table->string('transaction_type');
            $table->date('transaction_date');
            $table->bigInteger('transaction_amount');
            $table->string('receiver_name');
            $table->string('destination_fi');
            $table->string('currency');
            $table->integer('ctr_id');  //ctr_id have in ctr_uploads table
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
        Schema::dropIfExists('ctr_persons');
    }
}
