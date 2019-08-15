<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->char('sexo', 1);
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('cpf', 14)->unique();
            $table->date('data_nascimento');
            $table->text('foto')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->char('ativo', 1)->default('0');
            $table->string('tipo', 30)->nullable(); // proprietario ou inquilino
            $table->char('status', 1)->default('0'); // qualquer status necessário
            $table->string('residente1', 80)->nullable();
            $table->integer('idade_residente1')->nullable();
            $table->char('sexo_residente1',1)->nullable();
            $table->string('residente2', 80)->nullable();
            $table->integer('idade_residente2')->nullable();
            $table->char('sexo_residente2',1)->nullable();
            $table->string('residente3', 80)->nullable();
            $table->integer('idade_residente3')->nullable();
            $table->char('sexo_residente3',1)->nullable();
            $table->string('residente4', 80)->nullable();
            $table->integer('idade_residente4')->nullable();
            $table->char('sexo_residente4',1)->nullable();
            $table->string('residente5', 80)->nullable();
            $table->integer('idade_residente5')->nullable();
            $table->char('sexo_residente5',1)->nullable();
            $table->string('residente6', 80)->nullable();
            $table->integer('idade_residente6')->nullable();
            $table->char('sexo_residente6',1)->nullable();
            $table->string('residente7', 80)->nullable();
            $table->integer('idade_residente7')->nullable();
            $table->char('sexo_residente7',1)->nullable();
            $table->string('residente8', 80)->nullable();
            $table->integer('idade_residente8')->nullable();
            $table->char('sexo_residente8',1)->nullable();

            $table->string('unidade', 5)->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
