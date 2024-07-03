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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_tansaksi');
            
            
            $table->foreignId('user_id')->constrained(
                table: 'peminjam', indexName: 'add_foreign_key_user', column:'id_user'
            );
            
            $table->foreignId('id_alat')->constrained(
                table: 'alat', indexName: 'add_foreign_key_alat', column:'id_alat');
            $table->timestamp('tanggal_pinjam')->nullable();
            $table->timestamp('tanggal_kembali')->nullable();
            $table->integer('jumlah');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
