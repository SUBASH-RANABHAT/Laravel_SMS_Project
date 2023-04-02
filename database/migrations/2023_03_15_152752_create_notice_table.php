<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice', function (Blueprint $table) {
            $table->id();
            $table->string('notice1_title');
            $table->text('content1');
            $table->string('notice2_title');
            $table->text('content2');
            $table->string('notice3_title');
            $table->text('content3');
            $table->string('notice4_title');
            $table->text('content4');
            $table->string('notice5_title');
            $table->text('content5');
            $table->string('notice6_title');
            $table->text('content6');
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
        Schema::dropIfExists('notice');
    }
}
