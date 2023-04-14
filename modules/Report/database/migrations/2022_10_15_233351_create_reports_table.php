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
        Schema::create('reports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('unit')->unique();
            $table->longText('nama')->nullable();

            $table->date('tgl')->nullable();
            $table->json('upload_foto')->nullable();
            $table->string('lokasi_barang')->nullable();
            $table->longText('deskripsi_pekerjaan')->nullable();
            $table->string('status')->default('Pending');

            $table->longText('equipment')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
