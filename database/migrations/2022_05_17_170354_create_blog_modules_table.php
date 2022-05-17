<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('blog_categories');
            $table->foreignId('course_id')->constrained('blog_courses');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('description');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_modules');
    }
};
