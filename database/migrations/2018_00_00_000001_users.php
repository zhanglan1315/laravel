<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigInteger('id')->primary();
      $table->string('username')->unique();
      $table->string('password');
    });
  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
}
