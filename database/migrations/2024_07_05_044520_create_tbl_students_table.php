<?php

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
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('fk_parent_id');
            $table->enum('gender', ['M', 'F']);
            $table->timestamps();

            $table->foreign('fk_parent_id')->references('id')->on('tbl_parent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_students');
    }
};
