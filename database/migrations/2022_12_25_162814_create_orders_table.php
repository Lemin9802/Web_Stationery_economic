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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //info people recipient
            $table->string('name_recipient')->default(null);
            $table->string('email')->default(null);
            $table->string('phone')->default(null);
            $table->string('address')->default(null);

            $table->text('note');
            //status is show(1) or notShow(0)
            $table->integer('status')->default(1);

            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('orders');
    }
};
