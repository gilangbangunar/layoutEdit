<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_menubar', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string('menu');
            $table->integer('parent');
            $table->integer('sort');
            $table->string('deskripsi');
            $table->integer('is_parent');
            $table->string('href');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_menubar');
    }
};
