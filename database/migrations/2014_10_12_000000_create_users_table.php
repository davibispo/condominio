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
            $table->char('ativo', 1)->default('0');
            $table->char('status', 1)->default('0'); // qualquer status necessário
            $table->string('tipo', 30)->nullable(); // proprietario ou inquilino
            $table->string('bloco', 5)->nullable();
            $table->string('apto', 5)->nullable();
            $table->string('name');
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('cpf', 14)->unique();
            $table->char('sexo', 1);
            $table->date('data_nascimento');
            $table->text('foto')->nullable();
            
            $table->string('residente1', 80)->nullable();
            $table->integer('idade_residente1')->nullable();
            $table->integer('foto_residente1')->nullable();
            
            $table->string('residente2', 80)->nullable();
            $table->integer('idade_residente2')->nullable();
            $table->integer('foto_residente2')->nullable();
            
            $table->string('residente3', 80)->nullable();
            $table->integer('idade_residente3')->nullable();
            $table->integer('foto_residente3')->nullable();
            
            $table->string('residente4', 80)->nullable();
            $table->integer('idade_residente4')->nullable();
            $table->integer('foto_residente4')->nullable();
            
            $table->string('residente5', 80)->nullable();
            $table->integer('idade_residente5')->nullable();
            $table->integer('foto_residente5')->nullable();
            
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

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
