<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tariff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('count');
            $table->string('text')->nullable();
            $table->date('write_off_date')->nullable();
            $table->string('uuid')->default(DB::raw('(UUID())'));
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tariff');
    }
};
