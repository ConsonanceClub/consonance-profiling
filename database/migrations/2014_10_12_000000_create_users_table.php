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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password')->default();
            $table->integer('role_id')->default(2);
            $table->string('state')->default();
            $table->string('skills')->default();
            $table->string('short_bio', 1024)->default();
            $table->string('avatar', 1024)->default();
            $table->string('medium_username', 45)->default();
            $table->string('medium_url', 45)->default();
            $table->string('twitter_username', 45)->default();
            $table->string('twitter_url', 45)->default();
            $table->string('github_username', 45)->default();
            $table->string('github_url', 45)->default();
            $table->string('linkedin_username', 45)->default();
            $table->string('linkedin_url', 45)->default();
            $table->string('slack_username', 45)->default();
            $table->string('school')->unsigned()->default();
            $table->tinyInteger('active')->default();
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
