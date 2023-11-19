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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('img');
            $table->string('matour');
            $table->integer('gia');
            $table->string('ngaykhoihanh');
            $table->string('thoigiantour');
            $table->string('xuatphat');
            $table->string('diemdl');
            $table->string('lttour');
            $table->integer('socho');
            $table->text('chitiet');
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
        //
    }
};
