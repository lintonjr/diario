<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipOnTheme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('themes', function (Blueprint $table) {
            $table->integer('daily_id')->unsigned()->after('id');
            $table->integer('section_id')->unsigned()->after('daily_id');
            $table->integer('type_id')->unsigned()->after('section_id');
            $table->integer('layout_id')->unsigned()->after('type_id');
            $table->integer('status_id')->unsigned()->after('layout_id');

            $table->foreign('daily_id')
                ->references('id')->on('dailies')
                ->onDelete('cascade');
            $table->foreign('section_id')
                ->references('id')->on('sections')
                ->onDelete('cascade');
            $table->foreign('type_id')
                ->references('id')->on('types')
                ->onDelete('cascade');
            $table->foreign('layout_id')
                ->references('id')->on('layouts')
                ->onDelete('cascade');
            $table->foreign('status_id')
                ->references('id')->on('statuses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theme', function (Blueprint $table) {
            //
        });
    }
}
