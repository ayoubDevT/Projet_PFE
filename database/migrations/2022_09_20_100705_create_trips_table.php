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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_id')->constrained()->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_de')->nullable();
            $table->string('title_fr')->nullable();
            $table->integer('show');
            $table->string('thumbnail')->nullable();
            $table->text('overview_en');
            $table->text('overview_de')->nullable();
            $table->text('overview_fr')->nullable();
            $table->float('price');
            $table->text('content_en');
            $table->text('content_de')->nullable();
            $table->text('content_fr')->nullable();
            $table->integer('days');
            $table->integer('min_age');
            $table->string('months_en');
            $table->string('months_de')->nullable();
            $table->string('months_fr')->nullable();
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
        Schema::dropIfExists('trips');
    }
};
