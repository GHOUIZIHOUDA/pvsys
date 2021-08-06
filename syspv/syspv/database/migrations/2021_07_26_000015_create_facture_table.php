<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{


    /**
     * Run the migrations.
     * @table facture
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->float('prixtotal');
            $table->unsignedInteger('projet_idprojet');
            $table->timestamps();

            $table->index(["projet_idprojet"], 'fk_facture_projet1_idx');


            $table->foreign('projet_idprojet', 'fk_facture_projet1_idx')
                ->references('idprojet')->on('projet')
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
        Schema::dropIfExists('factures');
    }
}
