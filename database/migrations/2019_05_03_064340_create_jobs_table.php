<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('category_id');
            $table->integer('employer_id');
            $table->integer('salary_id');
            $table->integer('location_id');
            $table->string('name', 255);
            $table->set('type', ['full_time', 'part_time', 'contract', 'internship']);
            $table->integer('dedline');            
            $table->integer('deadline');
            $table->tinyInteger('working_hours');
            $table->text('description');
            $table->boolean('is_featured');
            $table->boolean('status');

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
