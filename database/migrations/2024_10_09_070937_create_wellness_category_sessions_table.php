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
        Schema::create('wellness_category_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->index('category_id');
            $table->string('name', 191);
            $table->text('description', 65535);
            $table->integer('points');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wellness_category_sessions');
    }
};
