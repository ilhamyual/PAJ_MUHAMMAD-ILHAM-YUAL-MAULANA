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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->timestamps();
        });

        // Seed the articles table
        DB::table('articles')->insert([
            ['id' => 1, 'judul' => 'Placeat saepe ea possimus provident quos est molestiae reiciendis.'],
            ['id' => 2, 'judul' => 'Totam laudantium molestiae similique sit.'],
            ['id' => 3, 'judul' => 'Aut consequatur ducimus ut non voluptatem voluptas.'],
            ['id' => 4, 'judul' => 'Ad sit voluptatem qui ut dolorem.'],
            ['id' => 5, 'judul' => 'Qui consequatur eum fuga corrupti.'],
            ['id' => 6, 'judul' => 'Quos nesciunt blanditiis amet odio.'],
            ['id' => 7, 'judul' => 'Ex doloremque consequuntur velit alias repellendus ullam.'],
            ['id' => 8, 'judul' => 'Perspiciatis a quo beatae nobis et suscipit illo.'],
            ['id' => 9, 'judul' => 'Maiores voluptate animi est enim totam.'],
            ['id' => 10, 'judul' => 'Rerum expedita inventore nulla voluptates perferendis placeat.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
