<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status')->default(0);
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('telephone')->nullable();
            $table->string('location');
            $table->string('course');
            $table->date('dob');
            $table->string('gender');
            $table->string('height');
            $table->text('message')->nullable();
            $table->text('remark')->nullable();
            $table->integer('followed_by')->nullable();
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
        Schema::dropIfExists('online_applications');
    }
}
