<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->date('date_of_joining');
            $table->string('guardian_name');
            $table->string('village',30);
            $table->string('post_office',30);
            $table->integer('district_id', false, true);
            $table->string('mobile', 20)->unique();
            $table->string('email', 50);
            $table->string('address',500);

            $table->string('nominee', 128);

            $table->string('username')->unique();
            $table->string('password');

            $table->tinyInteger('status')->default(1);

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
