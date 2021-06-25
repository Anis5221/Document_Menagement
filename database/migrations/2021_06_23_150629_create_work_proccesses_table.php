<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkProccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_proccesses', function (Blueprint $table) {
            $table->id();
            $table->integer('complain_id');
            $table->integer('user_id');
            $table->string('request_id');
            $table->string('message')->nullable();
            $table->string('resolving_date');
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
        Schema::dropIfExists('work_proccesses');
    }
}
