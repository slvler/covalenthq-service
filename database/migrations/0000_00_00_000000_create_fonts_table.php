<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFontsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fonts', function (Blueprint $table) {
            $table->string('title');
            $table->string('icon');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('fonts');
    }
}