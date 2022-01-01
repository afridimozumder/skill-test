<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('area_id');
            $table->string('code');
            $table->string('name');
            $table->string('age');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('customers');
    }
}
