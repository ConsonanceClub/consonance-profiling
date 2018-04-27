<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('username')->default();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            //$table->string('password')->default("");
            $table->integer('role_id')->default(2);
            $table->string('state')->nullable();
            $table->string('skills')->nullable();
            $table->string('short_bio', 1024)->nullable();
            $table->string('avatar', 1024)->nullable('');
            $table->string('medium_username', 45)->nullable('');
            $table->string('medium_url', 45)->nullable();
            $table->string('twitter_username', 45)->nullable('');
            $table->string('twitter_url', 45)->nullable();
            $table->string('github_username', 45)->nullable('');
            $table->string('github_url', 45)->nullable();
            $table->string('linkedin_username', 45)->nullable('');
            $table->string('linkedin_url', 45)->nullable('');
            $table->string('slack_username', 45)->nullable('');
            $table->string('school', 1024)->nullable('');
            $table->string('address', 1024)->nullable('');
            $table->tinyInteger('active')->nullable();
            $table->string('profession', 45)->nullable('');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
