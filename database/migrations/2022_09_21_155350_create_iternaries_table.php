<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIternariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
// Itinerary
        Schema::table('packages', function(Blueprint $table) {
            // $table->string('src')->nullable()->after('completed_step');
            $table->string('destination')->nullable()->after('slug');
        });
        // Schema::table('categories', function(Blueprint $table) {
        //     $table->string('slug')->nullable()->after('type');
        // });
        

        // Schema::create('itineraries', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('package_id');
        //     $table->foreign('package_id')->references('id')->on('packages');

        //     $table->string('title');
        //     $table->text('description')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('itineraries');
    }
}
