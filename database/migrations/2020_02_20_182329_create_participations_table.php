<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('section_id');
            $table->string('scientific_director');
            $table->string('work_title');
            $table->text('theses');
            $table->boolean('published')->default(false);
            $table->boolean('verified')->default(false);
            $table->boolean('presence')->default(false);
            $table->unsignedBigInteger('verified_by')->nullable();
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
        Schema::dropIfExists('participations');
    }
}
