<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->text('company')->nullable();
            $table->text('vat_number')->nullable();
            $table->text('user_id');
            $table->text('phone');
            $table->text('website')->nullable();
            $table->text('group')->nullable();
            $table->text('currency');
            $table->text('language');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('zip_code');
            $table->text('country');
            $table->text('billing_street')->nullable();
            $table->text('shipping_street')->nullable();
            $table->text('billing_city')->nullable();
            $table->text('shipping_city')->nullable();
            $table->text('billing_state')->nullable();
            $table->text('shipping_state')->nullable();
            $table->text('billing_zipcode')->nullable();
            $table->text('shipping_zipcode')->nullable();
            $table->text('billing_country')->nullable();
            $table->text('shipping_country')->nullable();
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
        Schema::dropIfExists('customer_details');
    }
}
