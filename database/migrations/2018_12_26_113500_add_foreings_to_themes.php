<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingsToThemes extends Migration
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
            $table->integer('agency_id')->unsigned()->after('daily_id');
            $table->integer('type_id')->unsigned()->after('agency_id');
            $table->integer('subtype_id')->unsigned()->after('type_id');
            $table->integer('competence_id')->unsigned()->after('subtype_id')->nullable();
            $table->integer('layout_id')->unsigned()->after('competence_id');
            $table->foreign('daily_id')
            ->references('id')->on('dailies')
            ->onDelete('cascade');
            $table->foreign('agency_id')
            ->references('id')->on('agencies')
            ->onDelete('cascade');
            $table->foreign('type_id')
            ->references('id')->on('types')
            ->onDelete('cascade');
            $table->foreign('subtype_id')
            ->references('id')->on('subtypes')
            ->onDelete('cascade');
            $table->foreign('competence_id')
            ->references('id')->on('competences')
            ->onDelete('cascade');
            $table->foreign('layout_id')
            ->references('id')->on('layouts')
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
        Schema::table('themes', function (Blueprint $table) {
            //
        });
    }
}
