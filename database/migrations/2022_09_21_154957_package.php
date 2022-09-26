<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Package extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('duration', 50)->nullable();
            $table->string('facility')->nullable();
            $table->string('price', 20)->nullable();
            $table->string('price_type', 6)->nullable();
            $table->text('include')->nullable();
            $table->text('exclude')->nullable();
            $table->json('hotel_city')->nullable();
            $table->tinyInteger('completed_step')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
