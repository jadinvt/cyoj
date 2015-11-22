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
                $table->integer('statementFrom_id')->unsigned();
                $table->integer('statementTo_id')->unsigned();
                $table->text('content');

                $table->foreign('statementFrom_id')
                ->references('id')
                ->on('statements')
                ->onDelete('cascade');

                $table->foreign('statementTo_id')
                ->references('id')
                ->on('statements')
                ->onDelete('cascade');

                $table->timestamps();
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
