<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('request_id');
            $table->string('head_line');
            $table->string('details');
            $table->string('branch_name');
            $table->string('branch_code');
            $table->string('occur_time');
            $table->string('file')->nullable();
            $table->string('request_type');
            $table->string('priority');
            $table->string('problem_url');
            $table->string('contact_persone');
            $table->string('phone');
            $table->string("status");
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
        Schema::dropIfExists('complains');
    }
}
