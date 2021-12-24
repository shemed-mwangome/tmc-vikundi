<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_no')->unique();
            $table->string('name');
            $table->timestamp('reg_date');
            $table->date('attachment_date');
            $table->integer('total_members')->default(0);
            $table->unsignedInteger('activity_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('ward_id');
            $table->unsignedInteger('street_id');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('street_id')->references('id')->on('streets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
