<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobotsTable extends Migration
{
    private $table = 'robots';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->comment('Owner (User ID)');
            $table->string('name')->comment('Robot name');
            $table->string('avatar')->nullable()->comment('URL');
            $table->float('weight')->comment('Grams (SI unit)');
            $table->float('power')->comment('Fictional metric');
            $table->float('speed')->comment('Meters per second (SI unit)');
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
        Schema::drop($this->table);
    }
}
