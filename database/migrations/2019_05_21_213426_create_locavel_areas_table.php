<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocavelAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locavel_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->decimal('valor', 5, 2)->nullable();
            $table->text('obs')->nullable();
            $table->char('ativo', 1)->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locavel_areas');
    }
}
