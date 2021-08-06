<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetHasComposantTable extends Migration
{


    /**
     * Run the migrations.
     * @table projet_has_composant
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets_has_composants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('projet_idprojet');
            $table->unsignedInteger('composant_idcomposant');
            $table->timestamps();

            $table->index(["composant_idcomposant"], 'fk_projet_has_composant_composant1_idx');

            $table->index(["projet_idprojet"], 'fk_projet_has_composant_projet1_idx');


            $table->foreign('projet_idprojet', 'fk_projet_has_composant_projet1_idx')
                ->references('idprojet')->on('projet')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('composant_idcomposant', 'fk_projet_has_composant_composant1_idx')
                ->references('idcomposant')->on('composant')
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
        Schema::dropIfExists('projets_has_composants');
    }
}
