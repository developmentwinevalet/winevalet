<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions_rate', function (Blueprint $table) {
            $table->id();
            $table->integer('rate');
            $table->string('agreement');
            $table->timestamps();
        });

        Schema::table('commissions_rate', function (Blueprint $table) {
            $table->unsignedBigInteger('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions_rate');
    }
}
