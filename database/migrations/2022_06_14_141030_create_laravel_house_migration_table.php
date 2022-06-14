<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelHouseMigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_house_migration', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
    $table->string('city');
    $table->char('zip_code', '6')->nullable();
    $table->string('country')->default('Italy');
    $table->string('county')->nullable();
    $table->smallinteger('square_meters', false , true);
    $table->tinyInteger('rooms')->nullable();
    $table->string('type', 100)->nullable();
    $table->boolean('for_sale')->default(0);
    $table->boolean('to_let')->default(1);
    $table->boolean('is_available')->default(1);
    $table->decimal('price', 8, 2, true);
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
        Schema::dropIfExists('laravel_house_migration');
    }
}
