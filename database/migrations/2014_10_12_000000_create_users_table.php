<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id("account_id");
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('role_id')->on('role')->onDelete("cascade");
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('gender_id')->on('gender')->onDelete("cascade");
            $table->string('first_name',25);
            $table->string('last_name',25);
            $table->string('email',100);
            $table->string('display_picture_link',100);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
