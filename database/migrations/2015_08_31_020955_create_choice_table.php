<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('choices')) {
            Schema::create('choices', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('statement_id')->unsigned();

                $table->foreign('statement_id')
                ->references('id')
                ->on('statements')
                ->onDelete('cascade');
            });
        }
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
}
