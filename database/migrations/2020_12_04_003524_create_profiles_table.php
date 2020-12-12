<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); //user當外鍵
            $table->bigIncrements('id');
            $table->string('restaurant_name')->nullable();
            $table->string('restaurant_address')->nullable();
            $table->string('restaurant_url')->nullable();
            $table->string('open_time')->nullable();
            $table->text('restaurant_info')->nullable();
            $table->string('restaurant_country')->nullable();
            $table->string('restaurant_phone')->nullable();
            $table->string('restaurant_avg_level')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
