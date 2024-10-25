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
        Schema::create('case_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arrest_id')->constrained()->cascadeOnDelete();
            $table->foreignId('case_status_id')->constrained()->cascadeOnDelete();
            $table->date('opened_date');
            $table->date('closed_date');
            $table->string('remark');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_files');
    }
};
