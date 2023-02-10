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
        Schema::create('single_setting_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setting_id')->constrained();
            $table->string('phone');
            $table->text('address');
            $table->text('iframe_url');
            $table->text('partnership_text');
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
        Schema::dropIfExists('single_setting_items');
    }
};
