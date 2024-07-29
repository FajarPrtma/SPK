<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddKelasIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the 'kelas_id' column already exists
        if (!Schema::hasColumn('users', 'kelas_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->unsignedBigInteger('kelas_id')->after('role_id');
                $table->foreign('kelas_id')->references('id')->on('kelass')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn('kelas_id');
        });
    }
}

