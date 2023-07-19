<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVendorObject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->integer('vendor_p_number');
            $table->integer('producer_id');
            $table->integer('ABN');
            $table->string('business_address');
            $table->string('shipping_address');
            $table->string('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendors', function (Blueprint $table) {
            $table->dropColumn('vendor_p_number');
            $table->dropColumn('producer_id');
            $table->dropColumn('ABN');
            $table->dropColumn('business_address');
            $table->dropColumn('shipping_address');
            $table->dropColumn('region');
        });
    }
}
