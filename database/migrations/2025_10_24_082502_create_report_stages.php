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
        Schema::create('report_stages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('report_id')->constrained('reports')->cascadeOnDelete();
            $table->foreignUuid('report_flow_id')->nullable()->constrained('report_flows')->nullOnDelete();
            $table->foreignUuid('previous_stage_id')->nullable()->constrained('report_stages')->nullOnDelete();
            $table->foreignUuid('assigned_to')->nullable()->constrained('users')->nullOnDelete();

            $table->enum('status', [
                'pending', 'in_progress', 'completed',
                'rejected', 'returned', 'cancelled', 'reopened'
            ])->default('pending');

            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('deadline_at')->nullable(); // batas waktu SLA
            $table->unsignedInteger('sla_minutes')->nullable(); // durasi SLA dalam jam/menit
            $table->boolean('sla_breached')->default(false); // apakah melewati SLA

            $table->text('notes')->nullable(); // catatan internal
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_stages');
    }
};
