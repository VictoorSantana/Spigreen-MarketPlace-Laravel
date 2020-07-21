<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_data', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('tipo')->default(1); 
            $table->string('nome', 25)->default('Sem nome'); 
            $table->integer('desconto')->default(0); 
            $table->decimal('valor', 5,2)->default(1); 
            $table->decimal('valor_antes', 5,2)->default(1); 
            $table->integer('parcelas')->default(1);
                        
            $table->string('descricao', 200)->default('Sem descricao'); 
            $table->string('imagem_path', 45)->default('sem'); 

            $table->integer('status')->default(1);
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
        Schema::dropIfExists('produto_data');
    }
}
