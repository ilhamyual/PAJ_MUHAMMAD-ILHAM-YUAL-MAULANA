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
        Schema::create('hadiahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_hadiah');
            $table->timestamps();
        });

        DB::table('hadiahs')->insert([
            ['id' => 1, 'nama_hadiah' => 'Kulkas'],
            ['id' => 2, 'nama_hadiah' => 'Lemari'],
            ['id' => 3, 'nama_hadiah' => 'Rumah'],
            ['id' => 4, 'nama_hadiah' => 'Mobil'],
            ['id' => 5, 'nama_hadiah' => 'Sepeda Motor'],
            ['id' => 6, 'nama_hadiah' => 'Pulpen'],
            ['id' => 7, 'nama_hadiah' => 'Tas'],
            ['id' => 8, 'nama_hadiah' => 'Sepatu'],
            ['id' => 9, 'nama_hadiah' => 'Voucher'],
            ['id' => 10, 'nama_hadiah' => 'Mouse'],
            ['id' => 11, 'nama_hadiah' => 'Laptop'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadiahs');
    }
};
