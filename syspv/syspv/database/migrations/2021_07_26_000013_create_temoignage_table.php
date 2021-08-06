<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemoignageTable extends Migration
{


    /**
     * Run the migrations.
     * @table temoignage
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoignages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('image');
            $table->string('titre');
            $table->text('description');
            $table->unsignedInteger('client_id');
            $table->timestamps();

            $table->index(["client_id"], 'fk_temoignage_client1_idx');


            $table->foreign('client_id', 'fk_temoignage_client1_idx')
                ->references('idclient')->on('client')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temoignages');
    }
}
