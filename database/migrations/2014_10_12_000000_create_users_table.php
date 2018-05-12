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
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->integer('role_id')->default(2);
            $table->string('state')->nullable();
            $table->string('skills')->nullable();
            $table->longText('short_bio')->nullable();
            $table->string('avatar')->nullable();
            $table->string('medium_username')->nullable();
            $table->string('medium_url')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('github_username')->nullable();
            $table->string('github_url')->nullable();
            $table->string('linkedin_username', )->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('slack_username')->nullable();
            $table->string('school')->nullable();
            $table->string('address' )->nullable();
            $table->tinyInteger('active')->nullable();
            $table->string('profession')->nullable();
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
