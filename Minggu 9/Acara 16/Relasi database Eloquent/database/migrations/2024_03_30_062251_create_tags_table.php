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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->unsignedBigInteger('article_id');
            $table->timestamps();
        });

        // Seed the tags table
        DB::table('tags')->insert([
            ['tag' => 'dolores', 'article_id' => 2],
            ['tag' => 'culpa', 'article_id' => 3],
            ['tag' => 'sit', 'article_id' => 4],
            ['tag' => 'quasi', 'article_id' => 3],
            ['tag' => 'inventore', 'article_id' => 5],
            ['tag' => 'ut', 'article_id' => 7],
            ['tag' => 'quisquam', 'article_id' => 5],
            ['tag' => 'fugiat', 'article_id' => 7],
            ['tag' => 'perspiciatis', 'article_id' => 5],
            ['tag' => 'voluptatem', 'article_id' => 3],
            ['tag' => 'non', 'article_id' => 2],
            ['tag' => 'ducimus', 'article_id' => 5],
            ['tag' => 'tempora', 'article_id' => 4],
            ['tag' => 'voluptatem', 'article_id' => 10],
            ['tag' => 'nisi', 'article_id' => 3],
            ['tag' => 'exercitationem', 'article_id' => 10],
            ['tag' => 'sed', 'article_id' => 2],
            ['tag' => 'tempora', 'article_id' => 6],
            ['tag' => 'laudantium', 'article_id' => 7],
            ['tag' => 'a', 'article_id' => 6],
            ['tag' => 'consequuntur', 'article_id' => 9],
            ['tag' => 'omnis', 'article_id' => 1],
            ['tag' => 'rerum', 'article_id' => 9],
            ['tag' => 'ut', 'article_id' => 1],
            ['tag' => 'amet', 'article_id' => 10],
            ['tag' => 'atque', 'article_id' => 9],
            ['tag' => 'at', 'article_id' => 4],
            ['tag' => 'hic', 'article_id' => 3],
            ['tag' => 'itaque', 'article_id' => 1],
            ['tag' => 'quia', 'article_id' => 9],
            ['tag' => 'consequatur', 'article_id' => 8],
            ['tag' => 'non', 'article_id' => 9],
            ['tag' => 'explicabo', 'article_id' => 10],
            ['tag' => 'eos', 'article_id' => 6],
            ['tag' => 'eveniet', 'article_id' => 5],
            ['tag' => 'dolor', 'article_id' => 10],
            ['tag' => 'magnam', 'article_id' => 10],
            ['tag' => 'aut', 'article_id' => 1],
            ['tag' => 'et', 'article_id' => 6],
            ['tag' => 'ut', 'article_id' => 10],
        ]);

        Schema::table('tags', function (Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
