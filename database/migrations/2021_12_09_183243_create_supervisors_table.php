<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->string('name');
            $table->string('profilepicture')->nullable();
            $table->string('email')->unique();
            $table->string('password');
	        $table->integer('maxtake')->default(1);
            $table->integer('currenttake')->default(0);
            $table->integer('role')->default(2);
   	        $table->string('field1');
            $table->string('field2')->nullable();
            $table->string('field3')->nullable();
            $table->timestamps();
            $table->rememberToken();

            $table->foreign('admin_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('supervisors');
    }
}
