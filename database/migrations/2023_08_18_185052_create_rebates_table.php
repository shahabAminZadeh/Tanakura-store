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
        Schema::create('rebates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->tinyInteger('percent');
            $table->integer('limit');
            $table->date('expire_time');
            $table->bigInteger('couponable_id');
            $table->string('couponable_type');
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
        Schema::dropIfExists('rebates');
    }
};
