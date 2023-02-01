<?php

use Faker\Provider\Lorem;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_cover")->nullable();
            $table->string("name");
            $table->text("description")->default("lorem Ipsum lorem Ipsum lorem Ipsum lorem Ipsumlorem Ipsum lorem Ipsum");
            $table->string("link_project")->nullable();
            $table->date_create("creation_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
