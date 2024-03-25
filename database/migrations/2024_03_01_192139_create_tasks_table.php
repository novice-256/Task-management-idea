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
            $table->string('description')->nullable();;
            $table->string('other_info')->nullable();;
            $table->integer('task_limit')->nullable();
            $table->integer('assigned_by');
            $table->string('task_color')->default('#b52f2f');
            $table->integer('label')->default(0);
            $table->string('stage_id');
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
