<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeTable extends Migration
{


    /**
     * Run the migrations.
     * @table employe
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('passeword');
            $table->integer('telephone');
            $table->unsignedInteger('departement_iddepartement');
            $table->timestamps();

            $table->index(["departement_iddepartement"], 'fk_employe_departement_idx');


            $table->foreign('departement_iddepartement', 'fk_employe_departement_idx')
                ->references('iddepartement')->on('departement')
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
        Schema::dropIfExists('employes');
    }
}
