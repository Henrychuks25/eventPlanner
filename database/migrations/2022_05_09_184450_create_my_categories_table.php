<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 64);
			$table->string('slug', 128)->unique();
			$table->timestamps();
			$table->boolean('status')->default(0);
			$table->string('thumb', 512)->nullable();
			$table->string('image', 512)->nullable();
			$table->boolean('template')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_categories');
    }
}
