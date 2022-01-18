<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fieldsupervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supervisor_id')->unsigned();
            $table->integer('field_id')->unsigned();

            $table->foreign('supervisor_id')
                  ->references('id')
                  ->on('supervisors')
                  ->onDelete('cascade');

            $table->foreign('field_id')
                  ->references('id')
                  ->on('fields')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fieldsupervisors');
    }
}
