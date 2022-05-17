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
        Schema::create('_users', function (Blueprint $table) {
            $table->id(); //for this command an id(primary key) is created
            $table->string('name', 30);
            $table->string('email', 100);
            $table->string('password', 8);
            $table->string('status', 20)->default("");
            $table->timestamps(); //for this 2 column created_at and updated_at is formed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_users');
    }
}
