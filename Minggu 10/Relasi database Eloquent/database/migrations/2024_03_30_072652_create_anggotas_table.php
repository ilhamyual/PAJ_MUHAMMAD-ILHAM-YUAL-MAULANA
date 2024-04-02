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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });

        DB::table('anggotas')->insert([
            ['id' => 1, 'nama' => 'Sari Tania Puspita'],
            ['id' => 2, 'nama' => 'Diki Alfarabi Hadi'],
            ['id' => 3, 'nama' => 'Luluh Sinaga'],
            ['id' => 4, 'nama' => 'Lamar Putra'],
            ['id' => 5, 'nama' => 'Banawi Kuswoyo'],
            ['id' => 6, 'nama' => 'Ratih Wijayanti'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
