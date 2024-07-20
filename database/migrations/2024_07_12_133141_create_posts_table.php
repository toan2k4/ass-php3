<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('thumbnail');
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('is_status')->default(true);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_most_popular')->default(false);
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_most_watched')->default(false);
            $table->boolean('is_banner')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
