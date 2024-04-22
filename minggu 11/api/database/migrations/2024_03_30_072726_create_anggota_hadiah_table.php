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
        Schema::create('anggota_hadiah', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('anggota_id');
            $table->unsignedInteger('hadiah_id');
            $table->timestamps();

            $table->foreign('anggota_id')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('hadiah_id')->references('id')->on('hadiahs')->onDelete('cascade');
        });

        DB::table('anggota_hadiah')->insert([
            ['id' => 1, 'anggota_id' => '6', 'hadiah_id' => '6'],
            ['id' => 2, 'anggota_id' => '2', 'hadiah_id' => '5'],
            ['id' => 3, 'anggota_id' => '6', 'hadiah_id' => '10'],
            ['id' => 4, 'anggota_id' => '3', 'hadiah_id' => '4'],
            ['id' => 5, 'anggota_id' => '3', 'hadiah_id' => '6'],
            ['id' => 6, 'anggota_id' => '1', 'hadiah_id' => '4'],
            ['id' => 7, 'anggota_id' => '4', 'hadiah_id' => '11'],
            ['id' => 8, 'anggota_id' => '5', 'hadiah_id' => '5'],
            ['id' => 9, 'anggota_id' => '2', 'hadiah_id' => '9'],
            ['id' => 10, 'anggota_id' => '6', 'hadiah_id' => '6'],
            ['id' => 11, 'anggota_id' => '3', 'hadiah_id' => '2'],
            ['id' => 12, 'anggota_id' => '2', 'hadiah_id' => '3'],
            ['id' => 13, 'anggota_id' => '1', 'hadiah_id' => '8'],
            ['id' => 14, 'anggota_id' => '6', 'hadiah_id' => '8'],
            ['id' => 15, 'anggota_id' => '3', 'hadiah_id' => '2'],
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_hadiah');
    }
};
