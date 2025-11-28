<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('one_pieces', function (Blueprint $table) {
        $table->id();
        $table->string('Nome');
        $table->date('data');
        $table->boolean('e_pirata');
        $table->decimal('Valor_Recompensa', 15, 2);
        $table->integer('Idade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('one_pieces');
    }
};
