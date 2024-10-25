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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identity_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('commune_id')->constrained()->cascadeOnDelete();
            $table->string('firstname');
            $table->string('surname');
            $table->date('dob');
            $table->string('address');
            $table->enum('gender',['Male','Female','Other']);
            $table->string('id_number');
            $table->string('cellphone');
            $table->string('nationality');
            $table->string('profession');
            $table->string('alt_cellphone')->nullable();
            $table->string(column: 'alt_email')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
