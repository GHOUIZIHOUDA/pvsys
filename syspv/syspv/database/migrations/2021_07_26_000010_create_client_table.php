<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{


    /**
     * Run the migrations.
     * @table client
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('passeword');
            $table->integer('telephone');
            $table->string('adresse');
            $table->text('descriptionprojet');
            $table->unsignedInteger('ville_idville');
            $table->timestamps();

            $table->index(["ville_idville"], 'fk_client_ville1_idx');


            $table->foreign('ville_idville', 'fk_client_ville1_idx')
                ->references('idville')->on('ville')
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
        Schema::dropIfExists('clients',);
    }
}
