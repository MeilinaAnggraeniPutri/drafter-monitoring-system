<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->json('tgl')->nullable();
            $table->string('unit')->unique();
            $table->json('equipment')->nullable();
            $table->longText('deskripsi_pekerjaan')->nullable();
            $table->longText('nama')->nullable();
            $table->string('upload_foto')->nullable();
            $table->string('lokasi_barang')->nullable();
            $table->string('sstatus')->default('Pending');
            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('report');
    }
};
