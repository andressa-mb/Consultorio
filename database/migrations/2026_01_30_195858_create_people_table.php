<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('address_id')
                ->constrained('addresses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->date('birthday');
            $table->string('telephone', 30)->nullable();
            $table->string('cellphone', 30);
            $table->string('cpf', 11);
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
