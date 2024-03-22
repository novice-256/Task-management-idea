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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('task_name');
            $table->string('description');
            $table->string('other_info');
            $table->integer('task_limit')->nullable();
            $table->integer('assigned_by');
            $table->string('task_color')->default('#b52f2f');
            $table->integer('label')->default(0);
            $table->string('project_stage_id')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
