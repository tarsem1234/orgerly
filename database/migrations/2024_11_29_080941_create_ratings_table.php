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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('rating_template_id')->unsigned()->index('rating_template_id');
            $table->integer('emp_id');
            $table->integer('manager_id')->nullable();
            $table->integer('template_section_id');
            $table->string('question', 3000);
            $table->integer('rating');
            $table->boolean('is_active')->default(1);
            $table->integer('approval_group_id')->nullable();
            $table->integer('rating_year')->default(2024);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
