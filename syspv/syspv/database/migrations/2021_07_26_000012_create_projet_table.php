<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetTable extends Migration
{


    /**
     * Run the migrations.
     * @table projet
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('image');
            $table->string('titre');
            $table->text('description');
            $table->unsignedInteger('status_idstatus');
            $table->unsignedInteger('typeprojet_idtypeprojet');
            $table->unsignedInteger('secteur_idsecteur');
            $table->unsignedInteger('client_idclient');
            $table->unsignedInteger('departement_iddepartement');
            $table->timestamps();

            $table->index(["status_idstatus"], 'fk_projet_status1_idx');

            $table->index(["typeprojet_idtypeprojet"], 'fk_projet_typeprojet1_idx');

            $table->index(["secteur_idsecteur"], 'fk_projet_secteur1_idx');

            $table->index(["client_idclient"], 'fk_projet_client1_idx');

            $table->index(["departement_iddepartement"], 'fk_projet_departement1_idx');


            $table->foreign('status_idstatus', 'fk_projet_status1_idx')
                ->references('idstatus')->on('status')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('typeprojet_idtypeprojet', 'fk_projet_typeprojet1_idx')
                ->references('idtypeprojet')->on('typeprojet')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('secteur_idsecteur', 'fk_projet_secteur1_idx')
                ->references('idsecteur')->on('secteur')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('client_idclient', 'fk_projet_client1_idx')
                ->references('idclient')->on('client')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('departement_iddepartement', 'fk_projet_departement1_idx')
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
        Schema::dropIfExists('projets');
    }
}
