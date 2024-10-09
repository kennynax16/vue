<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('main_settings', function (Blueprint $table) {
            $table->uuid('accountId')->primary();
            $table->string("ms_token",42);
            $table->string("UID_ms", 64)->nullable();

            // Устанавливаем tariff_id как обычное поле с внешним ключом
            $table->unsignedBigInteger("tariff_id");
            $table->foreign('tariff_id')->references('id')->on('tariff')->onDelete('cascade');

            $table->boolean("is_active");

            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('main_settings');
    }
};
