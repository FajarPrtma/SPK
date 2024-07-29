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
        Schema::create('quisioners', function (Blueprint $table) {
            $table->id();
            $table->string('jurusan');
            $table->text('cita');
            $table->float('cita_nilai')->default(0.3); // Tambahkan kolom nilai dengan default value
            $table->text('pendidikan');
            $table->float('pendidikan_nilai')->default(0.15); // Tambahkan kolom nilai dengan default value
            $table->text('hobi');
            $table->float('hobi_nilai')->default(0.2); // Tambahkan kolom nilai dengan default value
            $table->text('keahlian');
            $table->float('keahlian_nilai')->default(0.2); // Tambahkan kolom nilai dengan default value
            $table->text('lingkungan');
            $table->float('lingkungan_nilai')->default(0.15); // Tambahkan kolom nilai dengan default value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quisioners');
    }
};
