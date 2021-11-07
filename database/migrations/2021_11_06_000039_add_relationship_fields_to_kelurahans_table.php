<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToKelurahansTable extends Migration
{
    public function up()
    {
        Schema::table('kelurahans', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatans_id');
            $table->foreign('kecamatans_id', 'kecamatans_fk_5262757')->references('id')->on('kecamatans');
        });
    }
}
