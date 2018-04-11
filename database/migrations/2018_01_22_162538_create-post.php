<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->text('title');
            $table->text('description');
            $table->string('phone',11);
            $table->string('address');
            $table->string('id_post');
            $table->string('slug');
            $table->string('map')->nullable();
            $table->string('land_type',50);
            $table->decimal('price',10,6);
            $table->string('type_price',30);
            $table->string('trend',50)->nullable();
            $table->string('avatar')->nullable();
            $table->string('area')->nullable();
            $table->string('province',50)->nullable();
            $table->string('distrist',50)->nullable();
            $table->text('ward',50)->nullable();
            $table->integer('acr')->nullable();
            $table->integer('like')->default(0);
            $table->integer('action')->default(0);
            $table->string('type',50);
            $table->integer('facade')->nullable();
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
        Schema::dropIfExists('post');
    }
}
