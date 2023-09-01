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
        Schema::create('ceklab', function (Blueprint $table) {
            $table->id();
            $table->string('rekammedis');
            $table->integer('jeniscek');
            $table->double('hasilcek', 18, 12);
            $table->dateTime('tanggalcek');
            $table->text('rekomendasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ceklab');
    }
};
