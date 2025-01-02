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
        Schema::create('rating_templates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            $table->integer('user_id')->unsigned()->index('user_id');
            $table->string('employee_ids')->default('[]');
            $table->boolean('has_rating')->default(0);
            $table->json('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_templates');
    }
};
