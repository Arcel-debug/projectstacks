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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('timezone')->nullable();
            $table->text('website')->nullable();
            $table->text('skill_summary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('availability')->nullable();
            $table->string('experience_overview')->nullable();
            $table->integer('is_visible')->default('1');
            $table->text('hours_per_week')->nullable();
            $table->text('profile_title')->nullable();
            $table->text('profile_description')->nullable();
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
