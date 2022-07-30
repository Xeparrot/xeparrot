<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('key');
            $table->text('value')->nullable();
            $table->text('type');
            $table->text('options')->nullable();
            $table->text('default')->nullable();
            $table->text('function')->nullable();
            $table->text('description')->nullable();
            $table->text('required')->nullable();
            $table->text('settings_category');
            $table->text('is_visible')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
