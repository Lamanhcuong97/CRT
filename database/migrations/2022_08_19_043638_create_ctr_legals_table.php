<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtrLegalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctr_legals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idreporter');
            $table->string('business_name');
            $table->string('license_no');
            $table->date('license_date');
            $table->string('business_type');
            $table->string('office_phone');
            $table->string('customer_name');
            $table->string('nationality');
            $table->string('occupation');
            $table->string('identity_card');
            $table->string('customer_phone');
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
        Schema::dropIfExists('ctr_legals');
    }
}
